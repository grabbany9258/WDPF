<?php
    $divisions = array("Dhaka"=>"Buriganga", "Sylhet"=>"Shurma", "Khulna"=>"Rupsha", "Tangail"=>"Jomuna");

    $randomed = array_rand($divisions, 2);

    print_r($randomed);


?>