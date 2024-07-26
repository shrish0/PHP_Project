<?php


$con=mysqli_connect("localhost","root","Shrish@2004","wecam");
if(!$con)
{
  die("connection to this database failed due to " .mysqli_connect_error());
}

$post=$_POST['post'];
$userid=$_POST['userid'];
echo "$userid";
$sql="INSERT INTO `post` (`name`, `text`) VALUES ('$userid', '$post')";
$result=mysqli_query($con,$sql);

if($result)
{
  header("location:index1.php?userid=$userid");
echo "success";
}
else{
    echo "failure";
}
$con->close();
?>

