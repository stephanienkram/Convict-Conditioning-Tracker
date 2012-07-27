<div id="pushup">
<?php

$level = 1.1;

$q = "SELECT * FROM exercises WHERE level = '$level'";

$r = mysql_query($q) or DIE('Exercise not fetched '.mysql_error());


?>
</div>

<div id="squat">
Squat.
</div>


<div id="pullup">
Pullup.
</div>

<div id="leg">
Leg raises.
</div>

<div id="bridge">
Bridge.
</div>

<div id="handstand">
Handstand pushup.
</div>