<?php 
require 'config.php';

$sql = "SELECT * FROM sales WHERE s_approval = 'Yes'";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/table_listing.css">
    <title>Property lk</title>
</head>
<body>
    
    <!--Nav Bar-->
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="images/logonew1.png" alt="Propertylk Logo" class="logo-img">
                Propertylk
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="property.php">PROPERTIES</a></li>
            <li><a href="agent.php">AGENTS</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="sign_in.php" class="login-btn">LOGIN</a></li>
            <li><a href="sign_up.php" class="register-btn">REGISTER</a></li>
        </ul>
    </nav>

<br>
    <header style="background-color: #148f77; color: white; padding: 8px 0; text-align: center;">
        <h1 style="margin: 0;">Properties</h1>
    </header>
<hr>


                <table>
                    <tr>
                        <th>Property Image</th>
                        <th>Details</th>
                    </tr>

                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) 
                            {
                                echo "<tr>";

                                echo "<td><center><img class='pimg' src='". $row['s_image'] . "'alt='Image not found' width='600px'></center></td>";
                                echo "<td>
                                        <ul>
                                            <li><b>Location:</b> ".$row['s_location']."</li>
                                            <li><b>Price(LKR):</b> ".$row['s_price']."</li>
                                            <li><b>Contact No:</b> ".$row['s_mobile']."</li>
                                            <li><b>Details:</b> ".$row['s_details']."</li>
                                        </ul>
                                    </td>";

                                echo "<tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No land listings found.</td></tr>";
                        }
                    ?>
                </table>
<br>

  <!-- Footer Section -->
  <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Propertylk is your trusted partner in finding the perfect property. We offer the latest listings and professional real estate advice.</p>
            </div>

            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#properties">Properties</a></li>
                    <li><a href="#agents">Agents</a></li>
                    <li><a href="about.php">About US</a></li>
                    <li><a href="#faq">FAQs</a></li>
                </ul>
            </div>

            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: info@property.lk</p>
                <p>Phone: +1 (123) 456-7890</p>
                <p>Location: 123 Main St, Colombo 10</p>
            </div>

            <div class="footer-section social">
                <h2>Follow Us</h2>
                <a href="#"><img src="images/fb.png" style="width:20px; height:20px" alt="Facebook"></a>
                <a href="#"><img src="images/whatsapp.png" style="width:20px; height:20px" alt="Twitter"></a>
                <a href="#"><img src="images/in.png" style="width:20px; height:20px" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Propertylk | All Rights Reserved
        </div>
    </footer>

</body>
</html>