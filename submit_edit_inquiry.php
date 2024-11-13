<?php 
session_start();

require 'config.php';

$id = $_SESSION['contact_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$status = $_POST['status'];

// SQL query to update the record
$sql = "UPDATE contact_form SET name='$name', email='$email', message='$message', status='$status' WHERE id='$id'";

if ($con->query($sql) === TRUE) {
   echo "<script>alert('Record updated successfully'); window.location.href='inquiry_read.php';</script>";
} else {
   echo "Error updating record: " . $con->error;
}

?>