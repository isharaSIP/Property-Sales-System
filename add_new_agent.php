<?php 
session_start();

$fname = $_SESSION['a_name'];
$psw =  $_SESSION['a_psw'];
$email = $_SESSION['a_email'];


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
                    <li><a href="admin_dashboard.php">Profile</a></li>
                    <li><a href="admin_panel.php">Admin Panel</a></li>
                    <li><a href="approve_sales.php">Approve Property Post</a></li>
                    <li><a href="agent_panel.php">Manage Agent</a></li>
                    <li><a href="inquiry_read.php">Inqury</a></li>     
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="main-content">
                <h2>Add New Agent</h2>

                <div id="details">
                        <form method="post" action="new_agent_insert.php">

                            <strong>Name:</strong>
                            <input type="text" name='name' required>
                            </br></br>

                            <strong>Contact Number:</strong>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="077XXXXXXX" required>
                            <br><br>

                            <strong>Email:</strong>
                            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            </br></br>

                            <strong>Address</strong><br>
                            <textarea id="address" name="address" rows="4" cols="30" required></textarea><br><br>

                            <br><br>
                            <center>
                                <input type="submit" id="abtn"value="Add">
                                <button id="dbtn" onclick="window.location.href='agent_panel.php'">Cancel</button>
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
































