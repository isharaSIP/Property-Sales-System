<?php
    session_start();
    require 'config.php'; 

    $delete_id = $_GET['id'];
    
    $sql = "DELETE FROM contact_form WHERE id = '$delete_id'";
    
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
    } else {
        echo "Error deleting record: " . $con->error;
    }

    header("Location: inquiry_read.php");
    exit();
?>
