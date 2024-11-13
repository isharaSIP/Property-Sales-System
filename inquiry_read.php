<?php 
session_start();

$fname = $_SESSION['a_name'];
$email = $_SESSION['a_email'];

require 'config.php';

// Check for a valid session
if (!isset($_SESSION['a_id'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit();
}

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
                echo "<h1>$fname</h1><br>
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
                    <li><a href="inquiry_read.php">Inquiry</a></li>     
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="main-content">
                <h2>Inquiry Details</h2>
                <br>

                <?php

                // SQL query to select data from the contact_form table
                $sql = "SELECT id, name, email, message, status FROM contact_form";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // Start the table and header row
                    echo "<table border='1' cellpadding='10' cellspacing='0' style='width: 100%; border-collapse: collapse;'>
                            <tr style='background-color: #f2f2f2;'>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>";

                    // Loop through each row and output data with Delete and Edit buttons
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><center>" . $row["id"] . "</center></td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["message"] . "</td>
                                <td><center>" . $row["status"] . "</center></td>
                                <td><a href='inquiry_edit.php?id=" . $row["id"] . "' title='Edit'>
                                        <button id='abtn'>Edit</button>
                                    </a>
                                </td>
                                <td><center>
                                    <a href='inquiry_delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\" title='Delete'>
                                        <button id='dbtn'>Delete</button>
                                    </a>
                                    </center>
                                </td>
                                
                              </tr>";
                    }

                    // End the table
                    echo "</table>";
                } else {
                    echo "No results found.";
                }

                // Close the database connection
                $con->close();
                ?>

            </div>
            
        </div>
        
    </div>
    
    <footer>
        <p>&copy; 2024 propertylk. All rights reserved.</p>
    </footer>

    <script>
    // Function to change the color of the Status column based on the value
    function changeStatusColor() {
        var rows = document.querySelectorAll('table tr');

        for (var i = 1; i < rows.length; i++) {
            var statusCell = rows[i].getElementsByTagName('td')[4];
            var statusText = statusCell.innerText.trim().toLowerCase();

            if (statusText === 'yes') {
                statusCell.style.backgroundColor = 'green';
                statusCell.style.color = 'white';
            } else if (statusText === 'no') {
                statusCell.style.backgroundColor = 'red';
                statusCell.style.color = 'white';
            }
        }
    }

    window.onload = changeStatusColor;
    </script>

</body>
</html>
