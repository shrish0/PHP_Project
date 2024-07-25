<?php

$emp_id=$_POST["emp_id"];
$name=$_POST["name"];
$salary=$_POST["salary"];
$workplace=$_POST["workplace"];
$join_date=$date=date('Y-m-d', strtotime($_POST['join_date']));
$designation=$_POST["designation"];

$con=mysqli_connect("localhost","root","Shrish@2004","gross");
 if(!$con)
 {
   die("connection to this database failed due to " .mysqli_connect_error());
 }
 $sql="UPDATE `employer_table` SET `emp_id` = '$emp_id', `name` = '$name', `designation` = '$designation', `workplace` = '$workplace', `salary` = '$salary', `join_date` = '$join_date' WHERE `employer_table`.`emp_id` = '$emp_id'";
 $result=mysqli_query($con,$sql) or die("query unsuccessful");
 echo $result;
 header("location:employee.php");
 mysqli_close($con);
            

?>