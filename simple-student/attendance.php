<?php
include "connectionString.php";
include "cookie.php";
$sql = "SELECT * FROM attendance";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Attendance Records</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
  <style>
  /* Move CSS styles into an external stylesheet */
 

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  table, th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  @media only screen and (max-width: 600px) {
    /* Adjustments for smaller screens */
    #wrapper {
      width: 100%;
      margin: 20px auto 0;
    }

    table {
      font-size: 14px;
    }
  }
  </style>
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <h1>Attendance Records</h1>
    </div>
    <div id="menu">
      <ul>
        <li><a href="index.php">Back</a></li>
        <li><a href="add.php">Add</a></li>
        <li>
            <a href="#" style="color:yellow;">
                <?php echo $_COOKIE['username']; ?>
            </a>  
        </li>
      </ul>
    </div>

    <div id="main-content">
      <h2>All Records</h2>
      
      <?php if (mysqli_num_rows($result) > 0) { ?>
        <table>
          <thead>
            <tr>
              <th>srno</th>
              <th>Student Name</th>
              <th>Attendance Math</th>
              <th>Attendance DS</th>
              <th>Attendance DSTL</th>
              <th>Attendance COA</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['attendance_math']; ?></td>
                <td><?php echo $row['attendance_ds']; ?></td>
                <td><?php echo $row['attendance_dstl']; ?></td>
                <td><?php echo $row['attendance_coa']; ?></td>
                <td>
                  <a href='edita.php?id=<?php echo $row['student_id']; ?>'>Edit</a>
                  <a href='delete.php?id=<?php echo $row['student_id']; ?>'>Delete</a>
                </td>
              </tr>
            <?php 
            $counter++;
            } ?>
          </tbody>
        </table>
      <?php } else { ?>
        <h3>No records found.</h3>
      <?php } ?>

    </div>
  </div>
</body>
</html>

<?php
// Close database connection
mysqli_close($con);
?>
