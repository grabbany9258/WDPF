<?php
    $number =100;
    $string ="Hello world";

    echo gettype($number);
    echo "<br>";
    echo gettype($string);
    echo "<br>";
    echo is_int($string);
    echo "<br>";
    echo "integer: " . is_int($number);
    echo "<br>";

    $yes = false;
    echo "boolean: " . is_bool($yes); 
    echo "<br>";

    $numbers = [10,15,20];
    echo "scalar:". is_scalar($string);




?>