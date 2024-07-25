<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>item table</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>item table</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="item.php">back</a>
                </li>
                
            </ul>
        </div>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $con=mysqli_connect("localhost","root","Shrish@2004","gross");
    if(!$con)
    {
      die("connection to this database failed due to " .mysqli_connect_error());
    }
    $product_id=$_GET['id'];
    $sql= "SELECT * FROM `item_table` WHERE product_id='$product_id';";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result)
    ?>
    <form class="post-form" action="updateeditdata.php" method="post">
       
        <div class="form-group">
            <label>product_name</label>
            <input type="text" name="product_name" value="<?php echo $row['product_name'] ;?>"/>
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ;?>"/>
            <input type="text" name="price" value="<?php echo $row['prize'] ;?>"/>
        </div>
        <div class="form-group">
            <label>brought</label>
            <input type="text" name="brought" value="<?php echo $row['brought'] ;?>"/>
        </div>
        <div class="form-group">
            <label>stock</label>
            <input type="text" name="stock" value="<?php echo $row['stock'] ;?>"/>
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
    <?php } ?>
</div>
</div>
</body>
</html>
