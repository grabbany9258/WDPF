<?php
    $distance =40;
    $place = "Mawa";

    printf("Dhaka to %s is total %d km", $place, $distance);
?>
<br>

<?php
    $meal = "Bakhorkhani";
    $price = 180.5647;
    printf("Today's %s price is Taka: %.2f", $meal, $price ); //majhe dot 2 dile 2 ta dekabe 
    echo "<br>";
    printf("Today's %s price is Taka: %f", $meal, $price );

    // echo "<br>";

    $output = sprintf("Today's %s price is Taka: %f", $meal, $price ); //sprintf a output hoy na.

   echo $output;