<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List of Purchases</title>
</head>
<body>
<?php
	include "connecttodb.php";
?>
<div class='container'>
<table cellpadding='10'>
<tr>
	<th>Last Name</th>
	<th>Description</th>
	<th>Quantity </th>
</tr>
<?php
	$morequantity=$_POST["morequan"];

	$qquantity='SELECT customer.lastname as LastName,product.description as description, purchase.quantity as quantity FROM customer, product, purchase WHERE customer.customerid=purchase.customerid AND product.productid=purchase.productid AND purchase.quantity>'.$morequantity;
	$quanresult=mysqli_query($connection,$qquantity);
	if(!$quanresult){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($quanresult)) {
		echo '<tr>';
		echo '<td>'.$row["LastName"] .'</td>';
                echo '<td>'.$row["description"].'</td>';
		echo '<td>'.$row["quantity"].'</td>';
		echo '</tr>';
		}
		mysqli_free_result($quanresult);
		mysqli_close($connection);
?>
</table>
</body>
</html
