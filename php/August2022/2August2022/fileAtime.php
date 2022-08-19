<?php

    ini_set("date.timezone", "Asia/Dhaka");
    $file = $path ="myfile.txt";
    $time = fileatime($file);

    echo date("h:i:s", $time);

    // 3 types time 
    // A = Accessed time
    // C= created time
    // M= Modification time


?>