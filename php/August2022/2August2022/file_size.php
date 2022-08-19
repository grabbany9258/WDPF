<?php
    $file ="../../php_evidence.txt";
    $bytes = filesize($file);
    $kb =round($bytes/1024, 2);

    $filename = basename($file);
    echo "My file name is  $filename "


?>