<?php
    $value1 = "Hello";
    $value2 = &$value1;  // & is called reference.. ata dile 2 onujay value nibe value 1...
    $value2 = "world";

    echo $value1; //Hello
    echo "<br>";
    echo $value2; //WOrld

?>