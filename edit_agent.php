<?php 
session_start();

$fname = $_SESSION['a_name'];
$psw =  $_SESSION['a_psw'];
$email = $_SESSION['a_email'];

$id = $_GET['id'];
$_SESSION['land_id'] = $id;

require 'config.php';

$sql = "SELECT * FROM agent WHERE agent_id = '$id'";

$result = $con->query($sql);
$row = $result->fetch_assoc();

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
                <h2>Edit Agent Information</h2>

                <div id="details">
                <form action="update_agent.php" method="post" enctype="multipart/form-data">
                        
                        ID:<br>
                        <input type="text" name="id" value="<?php echo $row['agent_id']; ?>" readonly></input><br><br>

                        Name:<br>
                        <input type="text" name="name" value="<?php echo $row['agent_name']; ?>" required></input><br><br>

                        Contact Number:<br>
                        <input type="tel"  name="contact" value="<?php echo $row['agent_contact']; ?>" required><br><br>

                        E-mail<br>
                        <input type="email" " name="email" value="<?php echo $row['agent_email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>

                        Address:<br>
                        <input type="text"  name="address" value="<?php echo $row['agent_address']; ?>" required></input><br><br>

                        

                        <center>
                            <input type="submit" value="Update Agent">
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
