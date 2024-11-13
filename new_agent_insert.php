<?php 
require 'config.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT agent VALUES('', '$name', '$phone', '$email', '$address')";

if ($con->query($sql))
    {
        echo "<script>
                alert('New Agent Added!');
                window.location.href = 'agent_panel.php';
            </script>";
    }
    else
    {
        echo "Error".$con->error;
    }

    $con->close();
?>