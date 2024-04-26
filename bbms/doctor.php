<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
    <link rel="stylesheet" href="s1.css">
    <style type="text/css">
        td{
            width: 200px;
            height: 40px;
        }
    </style>
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
                <h1>Doctor Information </h1>
                <center><div id="form">
                <table border="1px" style="border-color: white;">
    <tr>
        <th>Doctor id</th>
        <th>Doctor Name</th>
        <th>Mobile No.</th>
        <th>Address</th>
        <th>Specialization</th>
    </tr>
    <?php
        // Array of doctor information
        $doctors = array(
            array("D1","Doctor1", "1234567890", "Address 1", "Specialization 1"),
            array("D2","Doctor2", "9876543210", "Address 2", "Specialization 2"),
            array("D3","Doctor3", "5678901234", "Address 3", "Specialization 3")
        );

        // Loop through the array to generate rows
        foreach ($doctors as $doctor) {
            echo "<tr>";
            foreach ($doctor as $detail) {
                echo "<td>$detail</td>";
            }
            echo "</tr>";
        }
    ?>
</table>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Dbms@Project</h4></div>
            <p align="center"><a href="logout.php"><font color="white"></font>Logout</a></p>
        </div>
    </div>
</body>
</html>