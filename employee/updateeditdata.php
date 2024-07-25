<?php

$product_name=$_POST['product_name'];
$product_id=$_POST['product_id'] ;
$prize=$_POST['price'];
$brought=$_POST['brought'];
$stock=$_POST['stock'];

$con=mysqli_connect("localhost","root","Shrish@2004","gross");
 if(!$con)
 {
   die("connection to this database failed due to " .mysqli_connect_error());
 }
 $sql="UPDATE `item_table` SET `product_id` = '$product_id', `prize` = '$prize', `product_name` = '$product_name', `brought` = '$brought', `stock` = '$stock' WHERE `item_table`.`product_id` = '$product_id'";
 $result=mysqli_query($con,$sql) or die("query unsuccessful");
 echo $result;
 header("location:item.php");
 mysqli_close($con);
            

?>