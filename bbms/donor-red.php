<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
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
                <h1>Donor Registration </h1>
                <center><div id="form">
                    <form action="" method="post">
                    <table>
                        <tr>
                            <td width="200px" height="50px">Enter Name</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                            <td width="200px" height="50px">Enter Father's Name</td>
                            <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Address</td>
                            <td width="200px" height="50px"><textarea name="address"></textarea></td>
                            <td width="200px" height="50px">Enter City</td>
                            <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Age</td>
                            <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                            <td width="200px" height="50px">Select Blood Group</td>
                            <td width="200px" height="50px">
                                <select name="bgroup">
                                    <option>O+</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter E-Mail</td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
                            <td width="200px" height="50px">Enter Mobile No</td>
                            <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
                        </tr>
                        <tr>
                            
                            <td width="200px" height="50px">Doctor Assigned</td>
                            <td width="200px" height="50px">
                                <select name="doctor">
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>D3</option>
                                </select>
                            </td>
                            <td width="200px" height="50px">DOB</td>
                            <td width="200px" height="50px"><input type="text" name="dob" placeholder="DOB"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="sub" value="Save"></td>
                        </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST['sub']))
                {
                    $name=$_POST['name'];
                    $fname=$_POST['fname'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    $age=$_POST['age'];
                    $bgroup=$_POST['bgroup'];
                    $email=$_POST['email'];
                    $mno=$_POST['mno'];
                    $doctor=$_POST['doctor'];
                    $dob=$_POST['dob'];
                    $q="INSERT INTO donor_registration (name,fname,address,city,age,bgroup,email,mno,doctor,dob) VALUES(?,?,?,?,?,?,?,?,?,?)";
                    $st2=$db->prepare($q);
                    if($st2->execute([$name,$fname,$address,$city,$age,$bgroup,$email,$mno,$doctor,$dob]))
                    {

                        echo "<script>alert('Registration Successful')</script>";
                    }
                    else{
                        echo "<script>alert('Donor Registration Failed')</script>";
                    }
                   
                }
            
                ?>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Dbms@Project</h4></div>
            <p align="center"><a href="logout.php"><font color="white"></font>Logout</a></p>
        </div>
    </div>
</body>
</html>