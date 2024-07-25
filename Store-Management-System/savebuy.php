<?php
    $product_id=$_POST["product_id"];
    $qty=$_POST["qty"];
    $con=mysqli_connect("localhost","root","Shrish@2004","gross");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="SELECT * from `item_table` WHERE `product_id` = '$product_id';";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $row=mysqli_fetch_assoc($result);
     $product_name=$row["product_name"];
     $price=$row["prize"];
     $sql="INSERT INTO `buy` (`product_id`, `product_name`, `prize`, `qty`) VALUES ('$product_id', '$product_name', '$price', '$qty');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     header("location:addbuy.php");
     mysqli_close($con);
?>