<?php


$con=mysqli_connect("localhost","root","Shrish@2004","wecam");
if(!$con)
{
  die("connection to this database failed due to " .mysqli_connect_error());
}

$userid=$_GET['userid'];
$password=$_GET['password'];

$sql="SELECT * FROM `login` WHERE `userid` = '$userid' AND `password` = '$password';";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
  header("location:index1.php?userid=$userid");
}
else{
    header("location:login1.html");
}
$con->close();
?>

