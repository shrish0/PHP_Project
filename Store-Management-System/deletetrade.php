<?php

$con=mysqli_connect("localhost","root","Shrish@2004","gross");
if(!$con)
{
die("connection to this database failed due to " .mysqli_connect_error());
}
$product_id=$_GET['id'];
$sql= "DELETE FROM buy WHERE `buy`.`product_id` = '$product_id';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
header("location:trade.php");
?>
