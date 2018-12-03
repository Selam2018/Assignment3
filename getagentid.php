<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Select agent ids from agent table </title>
</head>
<body>

<?php
include "connecttodb.php";
$agentlist="SELECT agentid FROM agent" ;
$agentresult=mysqli_query($connection,$agentlist);
if(!$agentresult){
 die("databases query failed.");
 }
while($row=mysqli_fetch_assoc($agentresult)){
 echo "<option value='";
 echo $row["agentid"]."'>";
 echo $row["agentid"];
 echo "</option>";
 }
 mysqli_free_result($agentresult);
?>
<?php
    mysqli_close($connection);
?>
</body>
</html>


