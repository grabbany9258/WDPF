<?php
$path ="myfile.txt";

echo $output = realpath($path); // realpath or full path
echo "<br>";

$path1 ="../27july2022/result.txt";

echo realpath($path1);

echo "<br>";

$rabbany = "../../rabbany.txt";
echo realpath($rabbany);




   



   


?>