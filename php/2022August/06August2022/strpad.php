<?php
    $amount=500;
   $output=  str_pad($amount, 10, "0", STR_PAD_LEFT);
   echo $output;

   echo "<br>";

   $string = "Bangladesh";

   echo str_pad($string, 20, "+=", STR_PAD_BOTH);


?>