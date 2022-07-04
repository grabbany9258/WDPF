<?php
    $value1 = "Hello";
    $value2 = &$value1;
    $value2 = "world";

    echo $value1; //Hello
    echo "<br>";
    echo $value2; //WOrld

?>