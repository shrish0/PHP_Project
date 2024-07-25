<?php

$con=mysqli_connect("localhost","root","Shrish@2004","shri_web");
if(!$con)
{
die("connection to this database failed due to " .mysqli_connect_error());
}
$srno=$_GET['id'];
$sql= "DELETE FROM resort WHERE `resort`.`id` = '$srno';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
header("location:resort.php");

?>
