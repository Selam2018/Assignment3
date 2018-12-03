<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Select product id from product table </title>
</head>
<body>

<?php
include "connecttodb.php";
?>

<?php
$prodlist='SELECT productid FROM product' ;
$prodresult=mysqli_query($connection,$prodlist);
if(!$prodresult){
 die("databases query failed.");
 }
while($row=mysqli_fetch_assoc($prodresult)){
 echo "<option value='";
 echo $row["productid"]."'>";
 echo $row["productid"];
 echo "</option>";
 }
 mysqli_free_result($prodresult);
?>
<?php
    mysqli_close($connection);
?>
</body>
</html>
