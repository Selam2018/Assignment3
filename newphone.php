<!DOCTYPE html> 
<html> 
<head> 
 <title>Updating the new phone</title> 
</head>
 <body> 
<?php
        include "connecttodb.php";
?>
<?php
session_start(); 
$phoneupdate= $_POST["nnump"];
echo '<br>'; 
$newupdate = 'UPDATE customer SET phoneno= "' . $phoneupdate . '" WHERE customerid = ' . $_SESSION["custidhold"];
echo $newupdate; 
echo '<br>';
 mysqli_query($connection,$newupdate);
 echo '<br>'; 
echo 'Phone number has been updated'; 
mysqli_close($connection);
?>
</body>
</html>
