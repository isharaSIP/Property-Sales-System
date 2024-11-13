<?php 

require 'config.php';

$id = $_GET['id'];

$sql = "UPDATE sales SET s_approval='Yes' WHERE s_id = '$id'";
$result = $con->query($sql);

if ($con->query($sql))
{
    echo "<script>
            alert('Land Approved successfully!');
            window.location.href = 'approve_sales.php';
        </script>";
} 
else 
{
    echo "Error: " . $con->error;
}

$con->close();
?>