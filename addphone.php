<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a Customere's phone number</title>
</head>
<body>
<?php
    include "connecttodb.php";
?>
<?php
echo '<br>';
session_start();
$_SESSION['custidhold']= $_POST["entcusid2"];
$checkphone= 'SELECT phoneno FROM customer WHERE customerid='.$_SESSION['custidhold'];

$resultphonenumber = mysqli_query($connection,$checkphone);
	if(!resultphonenumber){
               die("database query2 failed.");
       }
       while($row=mysqli_fetch_assoc($resultphonenumber)) {
               echo "The customer's current phone number:";
    	       echo $row["phoneno"];
               echo '<form action = "newphone.php" method = "post">';
               echo 'please enter new number ';
               echo '<br>' ;
               echo 'New phone number: <input type = "text" name = "nnump">';
               echo '<input type = "submit" value="Update">';
               echo '<br>';
               echo '</form>';
       }
	mysqli_free_result($resultphonenumber);
?>
<?php
	mysqli_close($connection) ;
?>
</body>
</html>
