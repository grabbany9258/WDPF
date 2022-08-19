<?php
    ini_set("date.timezone", "Asia/Dhaka");

    $file = "myfile.txt";

    $ctime =filectime($file);
    $atime =fileatime($file);
    $mtime =filemtime($file);

    echo "FIle Creation time: " . date("h:i:s" , $ctime) . "<br>";
    echo "FIle Access time: " . date("h:i:s" , $atime) . "<br>";
    echo "FIle Modification time: " . date("h:i:s" , $mtime) . "<br>";




?>

