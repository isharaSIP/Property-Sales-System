<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Propertylk</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
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

    <header style="background-color: #148f77; color: white; padding: 10px 0; text-align: center;">
        <h1 style="margin: 0;">Contact Us</h1>
    </header>

    <section style="padding: 40px 20px; background-color: #fff; text-align: center;">
        <h2 style="color: #333;">Get in Touch with Us</h2>
        <p style="color: #666; max-width: 800px; margin: 0 auto;">
            We’d love to hear from you! Whether you have questions about buying or selling properties, or need support, our team is here to help. Fill out the form below or reach us through the provided contact details.
        </p>
    </section>

    <section style="padding: 40px 20px; display: flex; flex-wrap: wrap; justify-content: center; gap: 50px; background-color: #f4f4f4;">
        <div style="background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 500px; width: 100%;">
            <h3 style="color: #333;">Contact Form</h3>
            <form action="submit_inquiry.php" method="post" onsubmit="return validateForm()">
                <label for="name" style="color: #666;">Name:</label>
                <input type="text" id="name" name="name" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc;">

                <label for="email" style="color: #666;">Email:</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc;">

                <label for="message" style="color: #666;">Message:</label>
                <textarea id="message" name="message" rows="5" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc;"></textarea>

                <button type="submit" style="background-color: #333; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                    Send Message
                </button>
            </form>

        </div>

        <div style="background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
            <h3 style="color: #333;">Contact Details</h3><br>
            <p style="color: #666;">
                <b>Phone :</b> +1 (123) 456-7890<br>
                <b>Email :</b> support@propertylk<br>
                <b>Address :</b> 123 Main St, Colombo 10
            </p>

            <h3 style="color: #333; margin-top: 30px;">Office Hours</h3><br>
            <p style="color: #666;">
                <b>Monday - Friday :</b> 9 AM - 5 PM<br>
                <b>Saturday :</b> 10 AM - 2 PM<br>
            </p>
            <p style="color:red;"><b>Sunday : Closed</b></P>
            
        </div>
    </section>

    <section style="padding: 40px 20px; background-color: #eaeaea; text-align: center;">
        <h2 style="color: #333;">Our Location</h2>
        <img src="images/location.jpg" style="width:600px; height:450px;" alt="location" class="src">
    </section>

    <footer style="background-color: #333; color: white; text-align: center; padding: 20px 0;">
        <p>&copy; 2024 Online Property Sales. All rights reserved.</p>
    </footer>

    <script>
    function validateForm() {
        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var message = document.getElementById('message').value.trim();

        if (name === "") {
            alert("Please enter your name.");
            return false;
        }

        if (email === "") {
            alert("Please enter your email.");
            return false;
        }

        if (!validateEmail(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        if (message === "") {
            alert("Please enter your message.");
            return false;
        }

        return true;
    }

    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(email);
    }
</script>

</body>
</html>
