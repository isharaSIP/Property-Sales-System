<?php
session_start();
$user_id = $_SESSION['id'];
$fname = $_SESSION['uname'];
$email = $_SESSION['email'];

$id = $_GET['id'];
$_SESSION['land_id'] = $id;

require 'config.php';
$sql = "SELECT * FROM sales WHERE s_id = '$id'";
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
                    <li><a href="sales_land.php">Property</a></li>   
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="main-content">
                <h2>Edit Property Details</h2>
                <div id="details">

                    <form action="update_edit_sales.php" method="post" enctype="multipart/form-data">
                        
                        Property Location:<br>
                        <input type="text" id="location" name="location" value="<?php echo $row['s_location']; ?>" required></input><br><br>

                        Price:
                        <input type="number" id="price" value="<?php echo $row['s_price']; ?>" name="price" required><br><br>

                        Contact Number:
                        <input type="tel" id="contact" name="contact" value="<?php echo $row['s_mobile']; ?>" required><br><br>

                        Details:<br>
                        <input type="text" id="detail" name="detail" value="<?php echo $row['s_details']; ?>" required></input><br><br>

                        <label for="image">Upload Image:</label>
                        <input type="file" id="image" name="image" accept="image/*" required><br><br>

                        <center>
                            <input type="submit" id="okbtn" value="Update Listing">
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