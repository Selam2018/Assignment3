<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a Customere</title>
</head>
<body>
<?php
    include "connecttodb.php";
?>
<?php
$newcustid =  $_POST["custid"];
$firstname =  $_POST["fname"];
$lastname  =  $_POST["lname"];
$custcity  =  $_POST["ccity"];
$phoneno   =  $_POST["phone"];
$agentid   =  $_POST["agent"];

$checkcus= 'SELECT * FROM customer WHERE customerid='.$newcustid;
$insertcus= 'INSERT INTO customer VALUES ('.$newcustid.',"'.$firstname.'","'.$lastname.'","'.$custcity.'","'.$phoneno.'",'.$agentid.')';
if(mysqli_num_rows(mysqli_query($connection,$checkcus))==0){
 mysqli_query($connection,$insertcus);
  echo'Customer has been added!';
}
else{
  echo 'This customer exists already';
}

mysqli_close($connection);
?>
</body>
</html>


