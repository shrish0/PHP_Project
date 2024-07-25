<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>employee</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>employee table</h1>
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
    $con=mysqli_connect("localhost","root","Shrish@2004","gross");
    if(!$con)
    {
      die("connection to this database failed due to " .mysqli_connect_error());
    }
    $emp_id=$_GET['id'];
    $sql= "SELECT * FROM `employer_table` WHERE emp_id='$emp_id';";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result)
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Employee Id</label>
            <input type="text" name="emp_id" hidden value="<?php echo $row['emp_id'] ;?>"/>
        </div>
       <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['name'] ;?>"/>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" name="salary" value="<?php echo $row['salary'] ;?>"/>
        </div>
        <div class="form-group">
            <label>workplace</label>
            <input type="text" name="workplace" value="<?php echo $row['workplace'] ;?>"/>
        </div>
        <div class="form-group">
            <label>join date</label>
            <input type="date" name="join_date" value="<?php echo $row['join_date'] ;?>"/>
        </div>
        <div class="form-group">
            <label>Designation</label>
            <input type="text" name="designation" value="<?php echo $row['designation'] ;?>"/>
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
