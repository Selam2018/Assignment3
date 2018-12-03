<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete a Customer</title>
</head>
<body>
<?php

	include 'connecttodb.php';
?>
<?php
$delcustomid=$_POST["delcusid"];
echo '<br>';
$qdelcus='DELETE FROM customer WHERE customerid='. $delcustomid;
echo '<br>';
mysqli_query($connection,$qdelcus);
echo 'Record has been deleted successfully';
mysqli_close($connection);
?>
</body>
</html>
