<?php
    $cities = ["Dhaka", "Khulna", "Khulna", "Rangpur","Dhaka", "Bagura"];

   
    echo "<pre>";
    print_r($cities);

    sort($cities);

    print_r($cities);


    $numbers =[5,15,28,100,7,24,357];
    sort($numbers);
    print_r($numbers);


    

    $divisions = array("Sylhet"=>"surma", "Khulna"=>"rupsha", "Dhaka"=>"buriganga", );
    sort( $divisions);
    echo "<pre>";
    print_r( $divisions);

?>

