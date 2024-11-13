<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/sign_up.css">
    <script src="js/sign_up.js"></script>
</head>

<body>
    <marquee>propertylk</marquee><br><br>
    
    <h2>Sign Up Form</h2>
    
    <form method="post" action="sign_up_insert.php" onsubmit="return checkPassword()">
        First Name<br>
        <input type="text" id="fname" name="fname" required><br><br>
        
        Last Name<br>
        <input type="text" id="lname" name="lname" required><br><br>
        
        Mobile Number<br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="077XXXXXXX" required><br><br>
        
        E-mail<br>
        <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
        
        Address<br>
        <textarea id="address" name="address" rows="4" cols="30" required></textarea><br><br>
        
        Password<br>
        <input type="password" id="pw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br>
        
        Re-Password<br>
        <input type="password" id="rpw" name="re_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br>
        
        <input type="checkbox" id="cbox" onclick="enableButton()"> accept privacy policy and terms.<br><br>
        
        <center>
            <input type="submit" id="sub" disabled>
        </center>
        
    </form>
    
    <hr>
    <footer>
        <p>&copy; 2024 property.lk. All rights reserved.</p>
    </footer>
</body>
</html>
