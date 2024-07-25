<?php 
   include 'connectionString.php';
   include 'cookie.php';
?>
<?php
     $name=$_POST["name"];
     $sql="INSERT INTO `attendance` (`student name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $sql="INSERT INTO `performance` (`student name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $sql="INSERT INTO `marks` (`student name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     header("location:add.php");
     mysqli_close($con);
?>