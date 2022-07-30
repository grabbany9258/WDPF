<?php

    $code=array("DH", "CO", "NO", "BA");
    $districts= array("Dhaka", "Comilla", "Noakhali", "Barishal");

    $combined = array_combine($code, $districts);
    echo "<pre>";
    print_r($combined);



?>