<?php
    $districts= array("Dhaka", "Comilla", "Noakhali", "Barishal", "pabna", "Narshingdi");

    $subset = array_slice( $districts, 2);
    echo "<pre>";
    print_r($subset);

    $subset = array_slice( $districts, 3, 2);
    echo "<pre>";
    print_r($subset);

    $subset = array_slice( $districts, -2);  // total length (6-2) =4 , so pabna & norshingdi..
    echo "<pre>";
    print_r($subset);





?>