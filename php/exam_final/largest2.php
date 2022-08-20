<?php
    $first = $_GET['first'];
    $second = $_GET['second'];
    $third = $_GET['third'];         

    //Your code here

    $largest_number = largest($first, $second, $third);
    $smallest_number = smallest($first, $second, $third);    

    echo "From the numbers you typed, the largest was $largest_number";
    echo " and smallest $smallest_number";    
?>
