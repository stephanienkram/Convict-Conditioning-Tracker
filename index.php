<?php include('header.php'); ?>

<div id="content">

<?php 

# if completed
if($_GET['type']){
    $type = $_GET['type'];
    $level = (double)$_GET['level'] + .1;
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

<div id="select">
<select name='exercise' id='exercise'>
<option value='pushup'>Pushup</option>
<option value='squat'>Squat</option>
<option value='pullup'>Pullup</option>
<option value='legraise'>Leg Raise</option>
<option value='bridge'>Bridge</option>
<option value='handstand'>Handstand Pushup</option>
</select>
</div>

<script>
$(document).ready(function() {
    $("#text").load("exercises.php?type=pushup");
});

$("#exercise").click(function(evt) {
    evt.preventDefault();
    var value = $(this).val();
    $("#text").load("exercises.php?type="+value);
})
</script>

<div id="text">

</div>
</div>

</body>

</html>