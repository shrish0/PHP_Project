<?php

$con=mysqli_connect("localhost","root","Shrish@2004","gross");
if(!$con)
{
die("connection to this database failed due to " .mysqli_connect_error());
}
$emp_id=$_GET['id'];
$sql= "DELETE FROM employer_table WHERE `employer_table`.`emp_id` = '$emp_id';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
header("location:employee.php");
?>
