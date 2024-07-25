<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>resort</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>resort table</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="employee.php">back</a>
                </li>
                
            </ul>
        </div>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $con=mysqli_connect("localhost","root","Shrish@2004","shri_web");
    if(!$con)
    {
      die("connection to this database failed due to " .mysqli_connect_error());
    }
    $emp_id=$_GET['id'];
    $sql= "SELECT * FROM `resort` WHERE id='$emp_id';";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result)
    ?>
    <form class="post-form" action="updatares.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['id'];?>"/>
            <input type="text" name="sname" value="<?php echo $row['name'];?>"/>
        </div>
        
        <div class="form-group">
            <label>location</label>
            <input type="text" name="slocation" value="<?php echo $row['location'];?>"/>
        </div>
        <div class="form-group">
            <label>prize</label>
            <input type="text" name="sprize" value="<?php echo $row['prize'];?>"/>
        </div>
        <div class="form-group">
            <label>salary</label>
            <input type="text" name="sstatus" value="<?php echo $row['status'];?>"/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
    <?php
        }
        ?>
</div>
</div>
</body>
</html>
