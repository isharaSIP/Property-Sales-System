<?php 
session_start();
require 'config.php';

$psw =  $_SESSION['psw'];
$email = $_SESSION['email'];

$sql = "DELETE FROM user WHERE email = '$email' AND password = '$psw'";

if ($con->query($sql) == TRUE)
{
    session_destroy();

    echo "<script>
            alert('Account deleted successfully');
            window.location.href = 'index.php';
        </script>";
}


?>