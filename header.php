<?php 
session_start();
include('conf.php'); 
?>

<html>
<head>
<title>Convict Conditioning Tracker</title>
<script src="jquery.js" type="text/javascript"></script>
<link rel="stylesheet" text="text/css" href="styles.css"></link>
</head>

<body>

<?php

# check if logged in
if(!$_SESSION['logged_in']){
    header('location:login.php');
}

?>

<h2>Convict Conditioning Tracker</h2>
<div id="nav">
<ul>
<li><a href="stats.php">Stats</a>
<li><a href="viewall.php">View All Tracks</a>
<li><a href="logout.php">Logout</a>
</ul>
</div>