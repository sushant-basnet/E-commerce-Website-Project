<?php
session_start();
$_SESSION = array();
echo '<script> window.location.replace("http://localhost/hamromart/admin.php"); </script>';
?>