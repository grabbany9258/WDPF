<?php
    $players = array();

    $players[] = array("Mushfik","Sakib", "Rafiq");
    $players[] = array("Dilshan","Mahela", "Dilshan");
    $players[] = array("Smith","Warner", "Pontin");

    echo "<pre>";
    print_r($players);

    // foreach($players as $player){
    // vprintf("player1:%s player2:%s player3:%s <br>" , $player);

    foreach($players as $player){
        foreach($player as $pl){
            echo $pl . "&nbsp";
        }
        echo "<br>";



}


?>