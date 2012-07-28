<?php

include('conf.php');
session_start();

if(isset($_GET['type'])){

    $type = $_GET['type'];
    $level = $_SESSION[$type];

    $q = "SELECT * FROM exercises WHERE level = '$level' AND type='$type'";
    $r = mysql_query($q) or DIE('Exercise not fetched '.mysql_error());
    $r = mysql_fetch_array($r);

    
    $step = floor($r['level']);
    $sub = $level - $step;
    if ($sub == 0.3 && $step == 10) $difficulty = "Elite Standard";
    else if ($sub == 0.3) $difficulty = "Progression Standard";
    else if ($sub == 0.2) $difficulty = "Intermediate Standard";
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
    echo "<img src='" . $r['picture'] . "'>";
    echo "</div>";

   
}

?>