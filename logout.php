<?php
session_start();
include('conf.php');
?>

<?php

session_destroy();
header('location:login.php');

?>