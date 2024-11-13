<?php
require 'config.php';
session_start();


$user_id = $_SESSION['id'];
$loc = $_POST['location'];
$price = $_POST['price'];
$mobile = $_POST['contact'];
$detail = $_POST['detail'];

// Handle the image upload
$image_name = $_FILES['image']['name'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_folder = "uploads/". $image_name;

// Check if the upload folder exists, if not, create it
if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

// Move the uploaded image to the desired folder
if (move_uploaded_file($image_tmp_name, $image_folder)) {
                                                                                    //image path
    $sql = "INSERT INTO sales VALUES ('', '$user_id', '$loc', '$mobile', '$price','$image_folder', '$detail', 'No')";

    if ($con->query($sql)) {
        echo "<script>
                alert('Land listing added successfully!');
                 window.location.href = 'sales_land.php';
            </script>";
    } else {
        echo "Error: " . $con->error;
    }
} else {
    echo "<script>alert('Failed to upload image');</script>";
}

$con->close();
?>
