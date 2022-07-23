<?php

    // function salesPrice($cost, $trans){
    //    $total= $cost +($cost * $trans/100);
    //    return $total;
    // }

    // $x = 500;
    // $y = 10;

    // echo salesPrice($x,$y);
?>



<!-- Default argument value...Upore akta default dewa ace..jodi echo te akta value output dewa hoy default uporer ta nibe.  -->
<?php

    function salesPrice($cost, $trans=5){
       $total= $cost +($cost * $trans/100);
       return $total;
    }

    $x = 500;
    $y = 10;

    echo salesPrice($x);


?>