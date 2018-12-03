<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Connecting to smequanassign2db database </title>
</head>
<body>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "8816";
$dbname = "smequanassign2db";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
	die("Database connection failed :" .
	mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"  );
	} //end of if statement
?>

</body>
</html>
