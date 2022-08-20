<?php

    $students=array("Dipu","Naimur","Rabbany","Anamul","Sajedul","Toki","Fayzullah");

        // echo count($students); //ai count funtion diye jana jay koto bar ghurbe..

        for($i=0; $i<count($students);$i++){
            if ($students[$i] == "Rabbany") continue;

            echo $students[$i] . "<br>";
            

        }

?>