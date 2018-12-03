<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inserting a new purchase and update the quantity</title>
</head>
<body>
<?php
    include "connecttodb.php";
?>
<?php
$pickcusid=$_POST["entercusid"];
$pickprodid=$_POST["enterprodid"];
$quantity=$_POST["quantity"];

$selecpur='SELECT * FROM purchase WHERE customerid='.$pickcusid.' AND productid='.$pickprodid;
$insertpur= 'INSERT INTO purchase VALUES ('.$pickprodid.','.$pickcusid.','.$quantity.')';
$updatepur='UPDATE purchase SET quantity= quantity + '.$quantity.' WHERE customerid='.$pickcusid.' AND productid='.$pickprodid;

if(mysqli_num_rows(mysqli_query($connection,$selecpur))==0){
 mysqli_query($connection,$insertpur);
 echo'A purchase has been added';
}
else{
 mysqli_query($connection,$updatepur);
 echo 'A purchase has been updated';
}

mysqli_close($connection);
?>
</body>
</html>


