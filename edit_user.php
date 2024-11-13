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
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>

            <div class="main-content">

                <h2>Edit Your Information</h2>

                <div id="details">
                
                    <form action="update_user.php" method="post" onsubmit="return confirmUpdate()">
                        User ID:<br>
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" disabled><br><br>
                        <?php $_SESSION['id'] = $row['id']; ?>

                        First Name:<br>
                        <input type="text" name="fname" value="<?php echo $row['fname']; ?>" required><br><br>

                        Last Name:<br>
                        <input type="text" name="lname" value="<?php echo $row['lname']; ?>" required><br><br>

                        Email:<br>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>" required><br><br>

                        Password:<br>
                        <input type="text" name="psw" value="<?php echo $row['password']; ?>" required><br><br>

                        Phone Number:<br>
                        <input type="tel" name="phone" value="<?php echo $row['contact']; ?>" required><br><br>

                        Address:<br>
                        <textarea name="address" rows="4" cols="30" required><?php echo $row['address']; ?></textarea><br><br>

                        <center>
                            <input type="submit" id="okbtn" value="Update Information">
                        </center>
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
