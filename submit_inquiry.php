<?php
require 'config.php';

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL query to insert data
    $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($con->query($sql) === TRUE) {
        // Success: show JavaScript alert and redirect to the form
        echo "<script>
            alert('Your inquiry is submitted successfully!');
            window.location.href = 'index.php'; // Redirect back to the form or another page
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the connection
    $con->close();
?>
