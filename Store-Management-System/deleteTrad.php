<?php

$con = mysqli_connect("localhost","root","Shrish@2004","gross");
$sql="DELETE FROM buy;";
$result=mysqli_query($con,$sql) or die("unsuccessful".mysqli_error);
header("location:trade.php");
mysqli_close($con);

?>