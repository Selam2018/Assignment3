<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Products purchased by the selected customer </title>
</head>
<body>

<?php

	include "connecttodb.php";
?>
<h1>List of products available</h1>
<o1>
<?php 
    $orderby2=$_POST["sortby222"];
    $prodlist = 'SELECT * FROM product ORDER BY ' . $orderby2;
    $resultlist = mysqli_query($connection,$prodlist);
    if(!$resultlist){
       die("query failed.");
    }
     while($row = mysqli_fetch_array($resultlist)){
     echo '<li>';
     echo $row["description"];
    }
    mysqli_free_result($resultlist);
?>
</ol>
<?php
    mysqli_close($connection);
?>
</body>
</html>
