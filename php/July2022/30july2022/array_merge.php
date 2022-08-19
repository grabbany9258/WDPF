<?php
    $face = array("J", "Q", "K", "A");
    $numbered = array("2", "3", "4", "5", "6", "7");

    $merged= array_merge($face, $numbered);
    echo "<pre>";
    print_r($face);
    print_r($numbered);
    print_r($merged);

    // merge suffle here....

    shuffle($merged);
    print_r($merged);







?>
