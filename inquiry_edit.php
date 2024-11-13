<?php 
session_start();

$fname = $_SESSION['a_name'];
$psw =  $_SESSION['a_psw'];
$email = $_SESSION['a_email'];

require 'config.php';

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
                <h2>Edit Inquiry Details</h2>

                <br>

                    <?php
                    
            
                        $id = $_GET['id'];
                        $_SESSION['contact_id'] = $id;
                        // Fetch the record from the database
                        $sql = "SELECT * FROM contact_form WHERE id = '$id'";
                        $result = $con->query($sql);

                        $row = $result->fetch_assoc();

                    
                    ?>

                <form method="post" id="details" action="submit_edit_inquiry.php">

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" readonly><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly><br><br>

                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="5" readonly><?php echo $row['message']; ?></textarea><br><br>

                    <label for="status">Status:</label>
                    <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>" ><br><br>

                    <br>
                    <center>
                        <button type="submit" id="abtn" name="update" >Update Record</button>
                        <button type="button" id="dbtn" name="cancel" onclick="window.history.back();">Back</button>
                    <center>
                </form>
 
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 propertylk. All rights reserved.</p>
    </footer>
</body>
</html>
