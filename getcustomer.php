<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Products purchased by the selected customer </title>
</head>

<body>
<?php
$query="SELECT * FROM customer ORDER BY lastname ASC;";
$result=mysqli_query($connection,$query);
if(!$result){
 die("databases query failed.");
 }
echo "Select a customer:" . "<br>";
while($row=mysqli_fetch_assoc($result)){
 echo '<input type="radio" name="pickacustomer" value="';
 echo $row["customerid"];

 echo'">'.$row["firstname"]." ".$row["lastname"].",".$row["custcity"].",".$row["phoneno"]."<br>";
 }
 
 mysqli_free_result($result);
?>
<?php
    mysqli_close($connection);
?>
</body>
</html>
