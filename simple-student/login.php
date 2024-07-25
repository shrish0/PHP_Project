<?php

$username = "";
$password = "";

$con = mysqli_connect("localhost","root", "Shrish@2004", "shri_web");
if (!$con) {
    die("connection to this database failed due to " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

if($username!=""){
    
    $sql = "SELECT * FROM `admin` WHERE name='$username' AND password='$password';";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
}

if ($num > 0) {
    // Set a cookie for the logged-in user
    setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie set for 30 days
    header("location:index.php");
} else {
    echo "login failed";
    $login = true;
}
$con->close();
?>