<?php
    $districts= array("Dhaka", "Comilla", "Noakhali", "Barishal", "pabna", "Narshingdi");

    // $subset = array_splice($districts, 3, 2, array("Norail", "Jessor"));
    // echo "<pre>";
    // print_r($subset); // bad jawa gulo dekhabe...

    // print_r($districts); // bad dewar por baki thaka gulo & new array ar gulo add korce.


    // array_ splice kora hoice.

    $subset = array_splice($districts, 3, -1, array("Norail", "Jessor"));
    echo "<pre>";
    print_r($subset);
    print_r($districts);

    





?>