<?php 
include "connectionString.php"
?>

<?php

$student_id=$_GET['id'];
$sql= "DELETE FROM attendance WHERE `attendance`.`student id` = '$student_id';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
$sql="DELETE FROM performance WHERE `performance`.`student id` = '$student_id';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
$sql="DELETE FROM marks WHERE `marks`.`student id` = '$student_id';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
header("location:attendance.php");
?>
