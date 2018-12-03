<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Unsold products</title>
</head>
<body>
<?php
	include "connecttodb.php";
?>
<div class= 'container'>
<table cellpadding='10'>
<tr>
	<th> Product ID</th>
	<th> Product Description </th>
</tr>
<?php

	$qnotsold='SELECT productid,description FROM product WHERE product.productid NOT IN (SELECT DISTINCT productid FROM purchase)';
	$resunsold=mysqli_query($connection,$qnotsold);
	if(!$resunsold){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($resunsold)) {
		echo '<tr>';
		echo '<td>' .$row["productid"].'</td>';
		echo '<td>' .$row["description"].'</td>';
		echo '</tr>';
	}
	mysqli_free_result($resunsold);
	mysqli_close($connection);
?>
</table>
</body>
</html>
