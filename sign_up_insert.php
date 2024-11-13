<?php 
    require 'config.php';
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pnumber = $_POST["phone"];                           
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user VALUES ('', '$fname', '$lname', '$email', '$password', '$pnumber', '$address')";

    if ($con->query($sql))
    {
        echo "<script>
                alert('Account created');
                window.location.href = 'sign_in.php';
            </script>";
    }
    else
    {
        echo "Error".$con->error;
    }

    $con->close();
?>