<?php
    $output ="This is one line. \n And this is another line.";
    $output1 ='This is one line. \n And this is another line.';
    $output2 ='This is one line.' ."\n" . 'And this is another line.';

    $output3 ="This is one line. \r And this is another line.";


    // echo "<pre>";
    echo $output;

    echo "<br>";
    echo $output1;

    echo "<br>";
    echo $output2;

    echo "<br>";
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