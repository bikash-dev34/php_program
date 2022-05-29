<?php
//current date show
$d=date("d m y");
echo $d;

//time 
echo "<br>";
$realTime=date_default_timezone_set("Asia/Kathmandu");
$t=date("h:i:s:a");
echo "The time is" ." ".$t;


?>