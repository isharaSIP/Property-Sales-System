<?php 
session_start();

$fname = $_SESSION['uname'];
$psw =  $_SESSION['psw'];
$email = $_SESSION['email'];

require 'config.php';

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$psw'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$_SESSION['id'] = $row['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
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
                    <li><a href="user_dashboard.php">Profile</a></li>
                    <li><a href="sales_land.php">Property Listing</a></li>    
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="main-content">
                <h2>User Information</h2>

                <div id="details">
                    <p>
                        <strong>User ID: </strong><?php echo $row['id']; ?></br></br>

                        <strong>First Name:</strong> <?php echo $row['fname']; ?></br></br>

                        <strong>Last Name:</strong> <?php echo $row['lname']; ?></br></br>

                        <strong>Phone Number:</strong> <?php echo $row['contact']; ?></br></br>

                        <strong>Email:</strong> <?php echo $row['email']; ?></br></br>

                        <strong>Address:</strong> <?php echo $row['address']; ?></br></br>
                    </p>
                    <br><br>
                    <center>
                        <button id="okbtn" onclick="window.location.href='edit_user.php'">Edit Information</button>
                        <button id="nobtn" onclick="deleteAccount()">Delete Account</button>
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
