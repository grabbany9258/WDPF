<?php
    $cities = ["Dhaka", "Khulna", "Rajshahi", "Rangpur","Barishal", "Bagura"];

    echo "<pre>";

    print_r($cities);

    $result = array_flip($cities);
    print_r($result);
    
?>