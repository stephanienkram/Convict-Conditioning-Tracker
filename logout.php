<?php
session_start();
include('conf.php');
?>

<?php

session_destroy();
$_SESSION['logged_out'] = false;
header('location:login.php');

?>