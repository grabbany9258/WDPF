<?php

//echo " <h1>Using increament</h1>";

// $a = 1; //initialize
// while ($a <= 20) {  //condition
//     echo $a . ") hello rabbany <br>";
//     $a++;  //increament
// }


echo " <h1>Multiple increament</h1>";

$a = 1;  //initialize
while ($a <= 30) { // condition
    echo $a . ") hello rabbany <br>";
    $a = $a + 5;    //increament with 5 interval at a time
}


//echo " <h1>Using decreament</h1>";

//  $x = 20;

// while ($x >= 1) {
//     echo "The number is: $x <br>";
//     $x--;
// }


echo " <h1>WITH HTML  ordered list</h1>";

$x = 1;  //initialize

echo "<ol>";

while ($x <= 10) {  //condition
    echo " <li>This is number:" . $x . "</li>";
    $x++;   //increament or decreament
}

echo "</ol>";
