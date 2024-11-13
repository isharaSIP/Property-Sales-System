<?php 
    require 'config.php';

    $email = $_POST["email"];
    $password = $_POST["psw"];

    $sql = "SELECT * FROM admin WHERE a_email = '$email' AND a_password = '$password'";

    $result = $con->query($sql);

    if ($result->num_rows == 1)
    {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['a_email'] = $email;
        $_SESSION['a_psw'] = $password;
        $_SESSION['a_name'] = $row['a_name'];

        echo "<script>
                alert('successfully login');
                window.location.href = 'admin_dashboard.php';
            </script>";
    }
    else
    {
        echo "<script>
                alert('Invalid username or password');
                window.location.href = 'admin_sign_in.php';
            </script>";
    }
?>