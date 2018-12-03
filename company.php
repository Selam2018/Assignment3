<!DOCTYPE html>
<html>
<head>
	<title>The Best Sport Products Company</title>
</head>
<body>

<?php
	include "connecttodb.php";
?>
<h1 style="text-align:center;" >Global Sport Products </h1>
<hr>
<img src="http://cs3319.gaul.csd.uwo.ca/vm131/assignment3/Assignment3/Sport.png" width="400" height="160">
<hr>
<hr>
<h1 style="text-align:center;">Welcome to the Sport Products Site</h1>
<p>
<hr>
<p>

<!--List of radio button form to pick a customer-->
<h2>Customer information and Products purchased</h2>
<form action="getproduct.php"method="post">
<?php
  	include'getcustomer.php';
?>
<input type="submit" value="Select a customer">
</form>
<p>
<hr>
<p>

<!--Creating a form to list products sorted by customer's choice-->
<h2>Products Available</h2>
<form action="prodtable.php" method="post">
     Sorted by:
<br>
<input type="radio" name="sortby222" value="description"> By Description<br>
<input type="radio" name="sortby222" value="cost"> By Price<br>
<input type="submit" value="List products available">
</form>
<p>
<hr>

<!--Form to creat a data entry window for customer to enter customer info-->
<h2>Add Purchases</h2>
<form action="addpurchase.php" method="post">
Customer ID:<select name="entercusid" id="entercusid">
<option value="1">Select Here</option>
<?php
	include "getcusid.php";
?>
<p>
</select>
<p>
<p>

<!--Form to create a drop down menu to pick customer id-->
Product ID:<select name="enterprodid" id="enterprodid">
<option value ="1" >Select Here</option>
<?php
      include "getprodid.php";
?>
</select>
<!--Form to let users enter the quantity of the purchase-->
Purchased quantity: <input type="text" name="quantity" value="Quantity">
<input type="submit" value="Enter Quantity">
</form>
<p>
<hr>
<p>

<!--Form to create a data entry window for users to enter the new customer info-->
<h2>Add customer</h2>
<form action="addnewcust.php" method="post">
CustomerID: <input type="text" name="custid" value="custid">
<br>
<br>
First Name: <input type="text" name="fname" value="fname">
<br>
<br>
Last Name : <input type="test" name="lname"  value="lname">
<br>
<br>
City      : <input type="test" name="ccity"  value="ccity">
<br>  
<br>
Phone     : <input type="test" name="phone"   value="phone">
<br>
<br>
Agent ID  : <select name="agent" id="agent">
<option value ="1" >Select Here</option>

<?php
        include "getagentid.php";
?>

<p>
<hr>
<p>

</select>
<input type="submit" value="Add customer">
</form>
<p>
<hr>
<p>

<!--Form to create a drop down to allow users to pick customer id from the database-->
<h2>Update customer's phone number</h2>
<form action="addphone.php" method="post">
Customer ID:<select name="entcusid2" id="entcusid2">
<option value="1">Select Here</option>

<?php
        include "getcusid.php";
?>

</select>
<input type = "submit" value = "Current phone  number">
</form>
<p>
<hr>
<p>

<!--Creating a drop down menu for users to pick a customer id-->
<h2>Delete customer</h2>
<form action="delcusid.php" method="post">
Customer ID:<select name="delcusid" id="delcusid">
<option value="1"> Select Here </option>
<?php
	include "getcusid.php";
?>
</select>
<input type="submit" value="Delete a customer">
</form>
<p>
<hr>
<p>

<!--Creating a form that allows users to query the purchase list by entering the minimum quantity-->
<h2>List of customers purchased a product more than a given quantity</h2>
<form action="purchaselist.php" method= "post">
Quantity: <input type="text" name="morequan">
<input type="submit" value="List purchases">
</form>
<p>
<hr>
<p>

<!--Listing products that have never been sold by running a query stored in getneversol.php -->
<h2>Unsold Products</h2>
<?php
	include"getneversold.php";
?>
<p>
<hr>
<p>

<!--Creating a form that allows a user to pick a product id to inquire total sale--> 
<h2>Total sales</h2>
<form action="totalsale.php" method="post">
Product ID: <select name="salprodid" id="salprodid">
<option value="1" > Select Here </option>
<?php
	include"getprodid.php";
?>
</select>
<input type="Submit" value= "Total Sales">
</form>
</p>

</body>
</html>



