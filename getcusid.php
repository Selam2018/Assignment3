<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Select customer id from customer table </title>
</head>
<body>
<?php
include "connecttodb.php";
$custlist="SELECT customerid FROM customer" ;
$custresult=mysqli_query($connection,$custlist);
if(!$custresult){
 die("databases query failed.");
 }
while($row=mysqli_fetch_assoc($custresult)){
 echo "<option value='";
 echo $row["customerid"]."'>";
 echo $row["customerid"];
 echo "</option>";
 }
 mysqli_free_result($custresult);
?>
<?php
    mysqli_close($connection);
?>
</body>
</html>


