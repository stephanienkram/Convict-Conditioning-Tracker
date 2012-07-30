<?php

include('conf/conf.php');
session_start();

if(isset($_GET['type'])){

    $type = $_GET['type'];
    $level = $_SESSION[$type];

    $q = "SELECT * FROM exercises WHERE level = '$level' AND type='$type'";
    $r = mysql_query($q) or DIE('Exercise not fetched '.mysql_error());
    $r = mysql_fetch_array($r);

    
    $step = floor($r['level']);
    $sub = $level - $step;
    if (abs($sub-0.3)<0.00001 && $step == 10) $difficulty = "Elite Standard";
    else if (abs($sub-0.3)<0.00001) $difficulty = "Progression Standard";
    else if (abs($sub-0.2)<0.00001) $difficulty = "Intermediate Standard";
    else $difficulty = "Beginner Standard";
    
    echo "<div id='left'>";
    echo "<h2>" . $r['name'] . "</h2>" . $difficulty . "<br>";
    #echo $difficulty . "<br>";
    echo $r['description'] . "<br>";
    echo $r['workout'];
    
    echo "<form method='index.php' method='get'>";
    echo "<input type='hidden' name='type' value='" . $type . "'>";
    echo "<input type='hidden' name='level' value='" . $level . "'>";
    echo "<input type='submit' value='I have completed this exercise!'>";
    echo "</div>";
   
    echo "<div id='right'>";
    echo "<img src='" . $r['picture'] . "' height='500''>";
    echo "</div>";
    
}    
    
if($_POST['type']){
    echo "HELLO BITCHES";
    $type = $_GET['type'];
    $level = (double)$_GET['level'] + .1;
    echo $level;
    $level_floor = floor($level);
    if($level - $level_floor > .3){
        $newlevel = $level_floor + 1.1;
    } else {
        $newlevel = $level;
    }
    
    $userid = $_SESSION['userid'];
    
    $q = "UPDATE users SET " . $type . "=" . $newlevel . " WHERE userid = '$userid'";
    mysql_query($q) or DIE('Database could not update. '.mysql_error());
    
    $_SESSION[$type] = $newlevel;
    
    $date = date('Ymd');
    
    $q = "INSERT INTO progress (date, userid, type, level) VALUES ('$date', '$userid', '$type', '$level')";
    mysql_query($q) or DIE('Progress not updated. '.mysql_error());
}

   


?>