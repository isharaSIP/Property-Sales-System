<?php 
session_start();
require 'config.php';

$user_id = $_SESSION['id'];
$fname = $_SESSION['uname'];
$email = $_SESSION['email'];

$sql = "SELECT * FROM sales WHERE user_id = '$user_id'";
$result = $con->query($sql);
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
                <h2>Property Listings</h2>

                <a href="sales_upload.php">
                    <button id="okbtn">Add Listing</button>
                </a>
                <br><br>

                <table>
    
                    <tr>
                        <th>ID</th>
                        <th>Approval</th>
                        <th>Location</th>
                        <th>Price(LKR)</th>
                        <th>Contact Number</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    
            
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) 
                            {
                                echo "<tr>";
                                echo "<td>" . $row['s_id'] . "</td>";
                                echo "<td>" . $row['s_approval'] . "</td>";
                                echo "<td>" . $row['s_location'] . "</td>";
                                echo "<td>" . $row['s_price'] . "</td>";
                                echo "<td>" . $row['s_mobile'] . "</td>";
                                echo "<td>" . $row['s_details'] . "</td>";
                                echo "<td><img src='". $row['s_image'] . "'alt='Image not found' width='100'></td>";


                                echo "<td>
                                <a href='edit_sales.php?id=$row[s_id]'><button id='okbtn'>Edit</button></a>
                                </td>";
                                
                                echo "<td>
                                <a href='delete_sales_list.php?id=$row[s_id]'><button id='nobtn'>Delete</button></a>
                                </td>";

                                echo "<tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No land listings found.</td></tr>";
                        }
                        ?>

                </table>
                                        
            </div>
            
        </div>
        
    </div>
    
    <footer>
        <p>&copy; 2024 propertylk. All rights reserved.</p>
    </footer>
</body>
</html>
