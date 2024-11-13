<?php
session_start();

require 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "UPDATE agent SET agent_name = '$name', agent_address = '$address', agent_email = '$email' WHERE agent_id = '$id'";


if ($con->query($sql) === TRUE) 
{
    echo "<script>
            alert('Agent updated successfully');
            window.location.href = 'agent_panel.php';
          </script>";
} else 
{
    echo "Error updating record: ". $con->error;
}

$con->close();

?>