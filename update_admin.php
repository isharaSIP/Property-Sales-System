<?php
session_start();

require 'config.php';

$id = $_SESSION['a_id'];

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['psw'];

$sql = "UPDATE admin SET a_name = '$name',  a_password = '$password', a_email = '$email' WHERE a_id = '$id'";


if ($con->query($sql) === TRUE) 
{
    session_destroy();

    echo "<script>
            alert('Information updated successfully');
            window.location.href = 'index.php';
          </script>";
} else 
{
    echo "Error updating record: ". $con->error;
}

$con->close();

?>