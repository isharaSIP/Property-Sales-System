<?php 
    require 'config.php';

    $email = $_POST["email"];
    $password = $_POST["psw"];

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

    $result = $con->query($sql);

    if ($result->num_rows == 1)
    {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $email;
        $_SESSION['psw'] = $password;
        $_SESSION['uname'] = $row['fname'];

        echo "<script>
                alert('successfully login');
                window.location.href = 'user_dashboard.php';
            </script>";
    }
    else
    {
        echo "<script>
                alert('Invalid username or password');
                window.location.href = 'sign_in.php';
            </script>";
    }
?>