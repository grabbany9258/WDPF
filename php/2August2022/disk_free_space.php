<?php
    $directory ="C:";
    $bytes =disk_free_space($directory);
    $Total_bytes =disk_total_space($directory);



    echo "Free space:" . round($bytes/1024/1024/1024, 2). "<br>";
    echo "Total space:" . round($Total_bytes/1024/1024/1024, 2). "<br>";
    

?>