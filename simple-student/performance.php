<?php
    include 'cookie.php';
    include 'connectionString.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>performance</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>performance</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php">back</a>
                </li>
                <li>
                    <a href="addp.php">Add</a>
                </li>
                <li>
                    <a href="#" style="color:yellow;">
                        <?php echo $_COOKIE['username']; ?>
                    </a>  
                </li>
            </ul>
        </div>

<div id="main-content">
    <h2>All Records</h2>
    <?php
     $sql="SELECT * FROM `performance`;  ";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");

     if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px" width=100%>
        <thead>
        <th>Sr no</th>
        <th>student_name</th>
        <th>remarks</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            $counter=0;
            while($row=mysqli_fetch_assoc($result))
            {
            $counter++;
            ?>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
                <td>
                <a href='editp.php?id=<?php echo $row['student_id'];?>'>Edit</a>
                <a href='delete.php?id=<?php echo $row['student_id'];?>'>Delete</a>
                </td>
            </tr>
            
            <?php } ?>
           
        </tbody>
    </table>
   <?php
     }
    else{
        echo "<h2>no record found<h2>";
    } 
    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
