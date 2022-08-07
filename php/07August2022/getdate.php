<?php
   echo time();
   echo "<hr>";

   $result= getdate(1659865384);

   echo "<pre>";
   
   print_r($result);


   echo "<hr>";

   echo "Today's day is " . $result['mday']. " Month is " . $result['month'];

   echo "<hr>";

   echo date("Y-m-d", time());

   echo "<hr>";

   echo date("Y-m-d h:m:s a", 1659865384);

?>