<?php

    $data = file_get_contents("article.txt");

    // echo ($data);

    $contenets = explode("\n", $data);

    foreach($contenets as $line){
        echo $line. "<br>";
    }



?>