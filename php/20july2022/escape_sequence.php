<?php
    $output ="This is one line. \n And this is another line.";
    $output1 ='This is one line. \n And this is another line.';
    $output2 ='This is one line.' ."\n" . 'And this is another line.';

    $output3 ="This is one line. \r And this is another line.";


    
<<<<<<< HEAD
    echo "<pre>";
=======
    // echo "<pre>";
>>>>>>> 92d7257ed9fd9de8b0a03c1f0dcbc5be0929b057
    echo $output;

    echo "<br>";
    echo $output1;

    echo "<br>";
    echo $output2;

<<<<<<< HEAD
    
=======
    echo "<br>";
>>>>>>> 92d7257ed9fd9de8b0a03c1f0dcbc5be0929b057
    echo $output3;

    echo "<br>";

?>




<?php

//courly brace 
    $students= array("Dipu"=>"Barishal","Rabbany"=>"Thakurgaon");
    //echo $students['Dipu'];
    echo "Dipu's home town is " .$students['Dipu'] . "<br>";
    echo "Dipu's home town is  {$students['Dipu']}";




?>