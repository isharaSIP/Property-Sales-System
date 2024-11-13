<?php 
    require 'config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM agent WHERE agent_id = '$id'";

    $data = mysqli_query($con, $sql);

    if ($data)
    {
        echo"<script>
                alert('Record Delete!!');
                window.location.href = 'agent_panel.php';
            </script>";
    }
    else
    {
        echo"<script>
                alert('Record Delete Error!!');
            </script>";
    }
?>