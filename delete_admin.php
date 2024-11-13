<?php 

session_start();
require 'config.php';


$aid = $_SESSION['a_id'];

$sql = "DELETE FROM admin WHERE  a_id= '$aid'";

if ($con->query($sql) == TRUE)
{
    session_destroy();

    echo "<script>
            alert('Admin account deleted successfully');
            window.location.href = 'index.php';
        </script>";
}


?>