<?php 
    require 'config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM sales WHERE s_id = '$id'";

    $data = mysqli_query($con, $sql);

    if ($data)
    {
        echo"<script>
                alert('Record Delete!!');
                window.location.href = 'sales_land.php';
            </script>";
    }
    else
    {
        echo"<script>
                alert('Record Delete Error!!');
            </script>";
    }
?>