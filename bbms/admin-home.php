<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="s1.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h2></div>
            <div id="body">
               <br>
               <?php
               $un=$_SESSION['un'];
               if(!$un)
               {
                header("Location:index.php");
               }
               ?>
                <h1>Welcome Admin </h1><br><br>
                <ul>
                    <li><a href="doctor.php">Doctor's Detail</a></li>
                    <li><a href="donor-red.php">Donor Registration</a></li>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="stoke-blood-list.php">Stock Blood List</a></li>
                </ul><br><br><br><br>
                <ul>
                    <li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li>
                    <li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
                    <li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
                </ul>
            </div>
            <div id="footer"><h4 align="center">Dbms@Project</h4></div>
            <p align="center"><a href="logout.php"><font color="white"></font>Logout</a></p>
        </div>
    </div>
</body>
</html>