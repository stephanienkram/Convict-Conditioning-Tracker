<html>
<head>
<title>Convict Conditioning Tracker</title>
<script src="jquery.js" type="text/javascript"></script>
</head>

<body>

<?php

# check if logged in
if(!$_SESSION['logged_in']){
    
}

?>

<h2>Convict Conditioning Tracker</h2>
<a href="stats.php">Stats</a><br>
<a href="viewall.php">View All Tracks</a><br>

Tracker:
<form action="" method="">
Exercise Track:
<select name='exercise' id='exercise'>
<option value='pushup'>Pushup</option>
<option value='squat'>Squat</option>
<option value='pullup'>Pullup</option>
<option value='legraise'>Leg Raise</option>
<option value='bridge'>Bridge</option>
<option value='handstand'>Handstand Pushup</option>
</select>


<script>

$("#exercise").click(function(evt) {
    evt.preventDefault();
    var value = $(this).val();
    value = "#" + value;
    $("#info").load("exercises.html "+value);
})
</script>

<div id="info">

</div>