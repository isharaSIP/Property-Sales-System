<?php 
session_start();

$fname = $_SESSION['a_name'];
$psw =  $_SESSION['a_psw'];
$email = $_SESSION['a_email'];

require 'config.php';

$sql = "SELECT * FROM agent";
$result = $con->query($sql);

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
                <h2>Admin Panel</h2><br>

                <a href="add_new_agent.php">
                    <button id="abtn">Add Agent</button>
                </a><br><br>

                <table>
    
                    <tr>
                        <th>Agent ID</th>
                        <th>Agent Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    
            
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) 
                            {
                                echo "<tr>";
                                echo "<td>" . $row['agent_id'] . "</td>";
                                echo "<td>" . $row['agent_name'] . "</td>";
                                echo "<td>" . $row['agent_contact'] . "</td>";
                                echo "<td>" . $row['agent_email'] . "</td>";
                               

                                echo "<td>
                                <a href='edit_agent.php?id=$row[agent_id]'><button id='abtn'>Edit</button></a>
                                </td>";
                                
                                echo "<td>
                                <a href='delete_agent.php?id=$row[agent_id]'><button id='dbtn'>Delete</button></a>
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


