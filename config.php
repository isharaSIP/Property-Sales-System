<?php 
    $con = new mysqli("localhost:3307", "root", "", "property_sales");

    if($con->connect_error)
    {
        die("Connection failed: ".$con->connect_error);
    }
?>


