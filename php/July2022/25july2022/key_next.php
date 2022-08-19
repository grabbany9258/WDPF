<?php
    $fame = array("Bogura"=>"Cart", "Cumilla"=>"Malai", "Sylhet"=>"Tea", "Dhaka"=>"Bakorkhani", 
    "Rajshahi"=>"Mango");

    // echo key($fame);
    // next ($fame);
    // echo key($fame);

    while($key = key($fame)){
        echo $key . "<br>";
        next($fame);
    }


?>