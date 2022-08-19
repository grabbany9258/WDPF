<?php
    $cities = ["Dhaka", "Khulna", "Khulna", "Rangpur","Dhaka", "Bagura"];

    $stateFrequency = array_count_values($cities);

    echo "<pre>";

    print_r($stateFrequency);

?>