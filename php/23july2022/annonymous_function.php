<?php  
    $x =15;

    $output = function(){
        // $x=10;
         global $x;
        $x += 100;
        echo $x."<br>";
    };

        $output();

        echo $x;

?>