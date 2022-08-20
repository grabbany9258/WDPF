<?php

    $string = "Rabbany | Dipu | Anamul | Aklima";
    // $string = "Rabbany  Dipu  Anamul  Aklima"; //space seperator ba comma diye o dhora jay

    $users = explode("|",  $string);

    echo "<pre>";
    print_r($users);




?>