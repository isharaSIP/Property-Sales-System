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
                    <li><a href="user_dashboard.php">Profile</a></li>
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
                <form action="update_admin.php" method="post" onsubmit="return confirmUpdate()">
                        Admin ID:<br>
                        <input type="text" name="id" value="<?php echo $row['a_id']; ?>" disabled><br><br>

                        Name:<br>
                        <input type="text" name="name" value="<?php echo $row['a_name']; ?>" required><br><br>

                        Email:<br>
                        <input type="text" name="email" value="<?php echo $row['a_email']; ?>" required><br><br>

                        Password:<br>
                        <input type="text" name="psw" value="<?php echo $row['a_password']; ?>" required><br><br>


                        <center>
                            <input type="submit"  id="abtn" value="Update Information">
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
