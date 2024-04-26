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
                <h1>Stoke Blood List </h1>
                <center><div id="form">
                <table border="1px" style="border-color: white;">
                        <tr>
                            <td><center><b><font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">Qty</font></b></center></td>
                        </tr>
                        <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                        <tr>
                            <td><center>AB+</center></td>
                            <td><center>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                        <tr>
                            <td><center>AB-</center></td>
                            <td><center>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>
                    </table>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Dbms@Project</h4></div>
            <p align="center"><a href="logout.php"><font color="white"></font>Logout</a></p>
        </div>
    </div>
</body>
</html>