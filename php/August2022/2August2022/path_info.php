<?php
$path ="E:\xampp\htdocs\WDPF\php\2August2022\myfile.txt";
   $output = pathinfo($path);

   echo "<pre>";


   print_r ($output); 


   echo $output['dirname'];
   echo "<br>";

   echo $output['basename'];
   echo "<br>";

   echo $output['filename'];
   echo "<br>";

   echo $output['extension'];
   echo "<br>";

   


?>