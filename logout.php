<?php 
session_start();
session_unset();
session_destroy();

echo "echo <script>
            alert('successfully Logout');
            window.location.href = 'index.php';
        </script>";
?>