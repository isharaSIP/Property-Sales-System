<?php 
session_start();

$fname = $_SESSION['uname'];
$psw =  $_SESSION['psw'];
$email = $_SESSION['email'];

require 'config.php';

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$psw'";
$result = $con->query($sql);
$row = $result->fetch_assoc();

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
                <h2>Add Property Details</h2>
                <div id="details">

                    <form action="add_sales.php" method="post" enctype="multipart/form-data">
                        
                        Land Location:<br>
                        <textarea id="location" name="location" rows="4" cols="30" required></textarea><br><br>

                        Price:
                        <input type="number" id="price" step="0.01" name="price" required><br><br>

                        Contact Number:
                        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required><br><br>

                        Property Details:<br>
                        <textarea id="detail" name="detail" rows="3" cols="20" required></textarea><br><br>

                        <label for="image">Upload Image:</label>
                        <input type="file" id="image" name="image" accept="image/*" required><br><br>

                        <center>
                            <input type="submit" id="okbtn" value="Upload Listing">
                        <center>
                    </form>

                </div>
            </div>
            
        </div>
        
    </div>
    
    <footer>
        <p>&copy; 2024 propertylk. All rights reserved.</p>
    </footer>
</body>
</html>
