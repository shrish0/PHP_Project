<?php
    $product_id=$_POST["product_id"];
    $product_name=$_POST["product_name"];
    $price=$_POST["price"];
    $stock=$_POST["stock"];
   

    $con=mysqli_connect("localhost","root","Shrish@2004","gross");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="INSERT INTO `item_table` (`product_id`, `prize`, `product_name`, `stock`) VALUES ('$product_id', '$price', '$product_name', '$stock');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     header("location:additem.php");
     mysqli_close($con);
?>