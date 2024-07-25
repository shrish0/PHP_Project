<?php

$id=$_POST["sid"];
$name=$_POST["sname"];
$location=$_POST["slocation"];
$prize=$_POST["sprize"];
$status=$_POST["sstatus"];

$con=mysqli_connect("localhost","root","Shrish@2004","shri_web");
 if(!$con)
 {
   die("connection to this database failed due to " .mysqli_connect_error());
 }
 $sql="UPDATE `resort` SET `name` = '$name', `location` = '$location', `prize` = '$prize', `status` = '$status' WHERE `resort`.`id` = '$id';";
 $result=mysqli_query($con,$sql) or die("query unsuccessful");
 header("location:resort.php");
 mysqli_close($con);
            

?>