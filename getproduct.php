<!DOCTYPE html>
<html>
<head>
<title> Products purchased by the selected customer </title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>

<?php
 $customerid=$_POST["pickacustomer"];
 $query='SELECT description FROM purchase, product
        	WHERE purchase.productid = product.productid and purchase.customerid = "' .$customerid . '"';
$result=mysqli_query($connection,$query);
 if(!$result){
   die("databases query on products failed.");
 }
 echo "<ul>"; //put the product in an unordered bulleted list
 while($row=mysqli_fetch_assoc($result)){
 echo "<li>".$row["description"].$row["cost"]."</li>";
 }
 echo "</ul>"; //end the bulleted list

 mysqli_free_result($result);
?>
<?php
    mysqli_close($connection);
?>
</body>
</html>
