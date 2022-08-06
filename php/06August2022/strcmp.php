<?php
    // $string1 = "10";
    // $string2 = "10";

    // echo strcmp( $string1,  $string2);

    $pswd = "supersecret";
    $pswd2 = "supersecret2";

    if(strcmp( $pswd, $pswd2) != 0){
        echo "Password do not match!";
    }
    else{
       echo "password match!";
    }





?>