<?php
include 'cookie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>option</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <style>
        #heading {
            font-family: 'Courier New';
            position: relative;
            display: flex;
            height: 1em;
            left: 4.5em;
            font-size: 8em;
        }
        .container {
            position: relative;
            display: flex;
        }
        .card {
            margin: 50px;
            width: 300px;
            height: 300px;
        }
        .content {
            display: flex;
            justify-content: center;
        }
        .container img {
            border-radius: 15%;
        }
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(80deg, #b5c2d5, #609efb);
        }
    </style>
</head>
<body>
    <div id="heading">Admin</div>
    <div class="container">
        <div class="card">
            <a href="marks.php"><img src="img/marks.jpg" alt="Marks" style="width:100%"></a>
            <div class="content">
                <h3>Marks</h3>
            </div>
        </div>
        <div class="card">
            <a href="attendance.php"><img src="img/attendance.jpg" alt="Attendance" style="width:100%"></a>
            <div class="content">
                <h3>Attendance</h3>
            </div>
        </div>
        <div class="card">
            <a href="performance.php"><img src="img/performance.jpg" alt="Performance" style="width:100%"></a>
            <div class="content">
                <h3>Performance</h3>
            </div>
        </div>
        <div class="card">
            <a href="login.html"><img src="img/home.jpg" alt="Home" style="width:100%"></a>
            <div class="content">
                <h3>Home</h3>
            </div>
        </div>
    </div>
</body>
</html>
