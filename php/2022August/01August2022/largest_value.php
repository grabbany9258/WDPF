<h1>Largest Number </h1>

<?php
    function largest(){
        $numbers = array(20,30,40,25,50,70,60);
        $max=0;
        for($i=0; $i<count($numbers); $i++){
            if($numbers[$i]> $max){
                $max = $numbers[$i];

            }else{
                $max = $max;
            }
        } return $max;
    }
    echo largest();

?>