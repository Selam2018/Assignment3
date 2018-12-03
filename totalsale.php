<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Total Sales</title>
</head>
<body>
<?php
	include "connecttodb.php";
?>
<div class= 'container'>
<table cellpadding='10'>
<tr>
	<th> Product ID </th>
	<th> Description </th>
	<th> Total Purchase </th>
	<th> Total Sales </th>
</tr>
<?php
	$saleprodid=$_POST["salprodid"];
	$qsale='SELECT purchase.productid as "prodid", description as "description", sum(purchase.quantity) as "totalpur", cost*(sum(purchase.quantity)) as "totalsales" FROM purchase, product WHERE purchase.productid='.$saleprodid;
	$ressales=mysqli_query($connection,$qsale);
	if(!$ressales){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($ressales)) {
		echo '<tr>';
		echo '<td>'.$row["prodid"].'</td>';
		echo '<td>'.$row["description"].'</td>';
		echo '<td>'.$row["totalpur"].'</td>';
		echo '<td>'.$row["totalsales"].'</td>';
		echo '</tr>';
	}
	mysqli_free_result($ressales);
	mysqli_close($connection);
?>
</table>
</body>
</html>

