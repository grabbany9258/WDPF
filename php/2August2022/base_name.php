<?php
$path ="E:\xampp\htdocs\WDPF\php\2August2022\myfile.txt";
   $output = echo basename($path, ".txt");
   $output1 = echo basename($path);

   echo $output; //without extension
   echo $output1; // //with extension


?>