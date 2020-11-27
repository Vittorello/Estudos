<?php

echo date("D/m/y h:i:s");

echo "<br>";

echo time();

?>


<br>

<?php

$ts = strtotime("now");

echo date("l, d/m/y", $ts);

?>