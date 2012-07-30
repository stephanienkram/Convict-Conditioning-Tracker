<?php 
session_start();
include('conf.php'); 
?>

<html>
<head>
<title>Convict Conditioning Tracker</title>
<link rel="stylesheet" text="text/css" href="styles.css"></link>
</head>

<body id="loginbg">

<div id="box"></div>

<div id="login">
<h2>Convict Conditioning Tracker</h2>

<?php

echo $_SESSION['logged_in'];

if($_SESSION['logged_in']) {
    echo "test";
    header('location:index.php');
}

if(isset($_POST['username'])){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    if (mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$username'")) == 0) $_SESSION['message'] = "That user does not exist.";
    else {
        if (mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'")) == 0) {$_SESSION['message'] = "Your password is not correct.";}
        else{
            $q = "SELECT * FROM users WHERE username='$username'";
            $r = mysql_query($q) or DIE("Fail: for whatever reason. ".mysql_error());
            $r = mysql_fetch_array($r);
            echo "test";
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $r['userid'];
            $_SESSION['pushup'] = $r['pushup'];
            $_SESSION['squat'] = $r['squat'];
            $_SESSION['pullup'] = $r['pullup'];
            $_SESSION['legraise'] = $r['legraise'];
            $_SESSION['bridge'] = $r['bridge'];
            $_SESSION['handstand'] = $r['handstand'];
            header('location:index.php');
        }
    }
}

?>

<?php 
echo $_SESSION['message']; 
$_SESSION['message'] = "";
?>

<table>
<form action="" method="post">
<tr><td>Name: <td><input type="text" name="username"><br>
<tr><td>Password: <td><input type="password" name="password"><br>
<tr><td><input type="submit" value="Login">
</form>
</table>

<div id="explore">
<a href="explore.php">Explore</a>
</div>

</div>

</body>

</html>