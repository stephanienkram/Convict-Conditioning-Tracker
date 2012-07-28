<!-- init.php for cctracker -->

<?php

include('conf.php');

$q = "DROP DATABASE $mysql_db";

mysql_query($q) or DIE('Database not dropped '.mysql_error().'<br>');

echo 'Database dropped...<br>';

session_destroy();

include('conf.php');

echo 'Database created...<br>';

$q = "CREATE TABLE users
(
userid int NOT NULL AUTO_INCREMENT,
username varchar(20) NOT NULL,
password varchar(20) NOT NULL,
pushup double NOT NULL,
squat double NOT NULL,
pullup double NOT NULL,
legraise double NOT NULL,
bridge double NOT NULL,
handstand double NOT NULL,
PRIMARY KEY (userid)
)";

mysql_query($q) or DIE('USER table was not created. '.mysql_error().'<br>');

echo "USER table created...<br>";

$q = "CREATE TABLE exercises
(
type varchar(10) NOT NULL,
level double NOT NULL,
name varchar(30) NOT NULL,
description text NOT NULL,
workout varchar(20) NOT NULL,
picture varchar(20) NOT NULL
)";

mysql_query($q) or DIE('EXERCISES table was not created. '.mysql_error().'<br>');

echo "EXERCISES table created...<br>";

$q = "CREATE TABLE progress
(
dateid int NOT NULL AUTO_INCREMENT,
date int NOT NULL,
userid int NOT NULL,
type varchar(10) NOT NULL,
level double NOT NULL,
PRIMARY KEY (dateid)
)";

mysql_query($q) or DIE('PROGRESS table was not created. '.mysql_error().'<br>');

echo "PROGRESS table created...<br>";

mysql_query("INSERT INTO users (username, password, pushup, squat, pullup, legraise, bridge, handstand) VALUES('admin', 'admin', 1.1, 1.1, 1.1, 1.1, 1.1, 1.1)") or DIE('Admin not created. '.mysql_error());

echo 'Admin created<br>';

echo "DONE!!<br>";

include('populate.php');

header('location:login.php');

?>