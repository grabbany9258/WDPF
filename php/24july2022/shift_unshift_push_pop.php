<?php
    $divisions = array("Dhaka", "Sylhet", "Khulna");
    echo "<pre>";

    print_r($divisions);

    // array_unshift add from begging.

    array_unshift($divisions, "Rajshahi", "Chittagong");
    print_r($divisions);

    // array shift remove from beggining.

    array_shift($divisions);
    print_r($divisions);

    // array_pop remove from ending

    array_pop($divisions);
    print_r($divisions);


    // array_push adding from ending

    array_push($divisions, "Barishal", "Rangpur");
    print_r($divisions);

    





?>