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
     $sql="INSERT INTO `employer_table`(`emp_id`, `salary`, `workplace`, `join_date`, `designation`, `name`) VALUES ('$emp_id','$salary','$workplace','$join_date','$designation','$name')";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     header("location:add.php");
     mysqli_close($con);
?>