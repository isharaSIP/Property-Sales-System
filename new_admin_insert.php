<?php 
require 'config.php';

$name = $_POST['aName'];
$email = $_POST['aEmail'];
$psw = $_POST['aPassword'];

$sql = "INSERT admin VALUES('', '$name', '$email', '$psw')";

if ($con->query($sql))
    {
        echo "<script>
                alert('New admin Added!');
                window.location.href = 'admin_panel.php';
            </script>";
    }
    else
    {
        echo "Error".$con->error;
    }

    $con->close();
?>