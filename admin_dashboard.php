<?php 
session_start();

$fname = $_SESSION['a_name'];
$psw =  $_SESSION['a_psw'];
$email = $_SESSION['a_email'];

require 'config.php';

$sql = "SELECT * FROM admin WHERE a_email = '$email' AND a_password = '$psw'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$_SESSION['a_id'] = $row['a_id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <script src="js/sign_up.js"></script>
</head>
<body>
    <div class="box1">

        <div class="header">
            <img src="images/logo.png" align="left" >
            <p class="siteName">Propertylk</p>
            <?php
                echo "<h1>$fname</h><br>
                    <h5>$email</h5>";
            ?>
        </div>

        <div class="box2">

            <div class="sidebar">
                <h2>Navigation</h2>
                <ul id="menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="admin_panel.php">Admin Panel</a></li>
                    <li><a href="approve_sales.php">Approve Property Post</a></li>
                    <li><a href="agent_panel.php">Manage Agent</a></li>
                    <li><a href="inquiry_read.php">Inqury</a></li>     
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="main-content">
                <h2>Admin Information</h2>

                <div id="details">
                    <p>
                        <strong>User ID: </strong><?php echo $row['a_id']; ?></br></br>

                        <strong>Name:</strong> <?php echo $row['a_name']; ?></br></br>

                        <strong>Email:</strong> <?php echo $row['a_email']; ?></br></br>

                        <strong>Password:</strong> <?php echo $row['a_password']; ?></br></br>
                    </p>
                    <br><br>
                    <center>
                        <button id="abtn" onclick="window.location.href='edit_admin.php'">Edit Information</button>
                        <button id="dbtn" onclick="deleteAdmin()">Delete Account</button>
                    </center>

                </div>
            
            </div>
            
        </div>
        
    </div>
    
    <footer>
        <p>&copy; 2024 propertylk. All rights reserved.</p>
    </footer>
</body>
</html>
