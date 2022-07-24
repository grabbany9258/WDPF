<?php
    $players = array();

    $players["Bangladesh"] = array("Mushfik","Sakib", "Rafiq");
    $players["Srilanka"] = array("Dilshan","Mahela", "Dilshan");
    $players["Australia"] = array("Smith","Warner", "Pontin");

    // echo "<pre>";
    // print_r($players);

    
    foreach($players as $country=> $player){
        echo "<h1> $country</h1>";
        foreach($player as $pl){
            echo $pl . ", ";
        }
        echo "<br>";



}


?>