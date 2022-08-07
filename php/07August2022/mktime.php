<?php
$current = time();

   $time =  mktime(06, 00, 10, 7 ,1 ,2022);
//    echo date("d-m-Y", $time);

$diff= $current- $time;

$days = round($diff/60/60/24);

echo $days;

?>