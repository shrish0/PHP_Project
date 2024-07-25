<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>bill counter</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>bill</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="option.html">back</a>
                </li>
                <li>
                    <a href="addbuy.php">Add</a>
                </li>
            </ul>
        </div>
<style>
#wrapper{
    width: 90%;
    margin: 50px auto 0;
    background-color: #fff;
}
</style>
<div id="main-content">
    <h2>All Records</h2>
    <?php
     $con=mysqli_connect("localhost","root","Shrish@2004","gross");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="SELECT * FROM `buy`;  ";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");

     if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px" width=100%>
        <thead>
        <th>product_id</th>
        <th>product_name</th>
        <th>price</th>
        <th>qty</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['prize']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td>
                    <a href='deletetrade.php?id=<?php echo $row['product_id'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
    <?php
    $sql= "SELECT SUM(`prize`) as 'sum' FROM `buy`;";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result)
    ?>
    <div style="text-align: center;">
    <h1>
    Total Bill Amount <br>
    <br>
    <?php echo $row['sum'] ;?>
    </h1>
    </div>
    <?php
    }
    ?>
    <div style="text-align: center; ">
        <form action="deletetra.php">
            <input type="submit" value="New" style="font-size: 40px;">
        </form>    
    <div>
    <?php }else{
        echo "<h2>no record found<h2>";
    } 
    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
