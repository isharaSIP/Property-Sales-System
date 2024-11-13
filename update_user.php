<?php
session_start();

require 'config.php';

$id = $_SESSION['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE user SET fname = '$fname', lname = '$lname', password = '$password', contact = '$phone', address = '$address', email = '$email' WHERE id = '$id'";


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