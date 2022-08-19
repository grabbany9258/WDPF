<?php

 $students= array("Dipu"=>"Barishal","Rabbany"=>"Thakurgaon");

 // Do not use space or tab after identification

 echo <<<ABC

We have two students. One is Dipu and onother is Rabbany. Dipu's home district is {$students['Dipu']}
and Rabbany's home district is {$students['Rabbany']}; <br><br>
ABC;



// Do not use space or tab after identification
$dipu ="Barishal";
$rabbany = "Thakurgaon";

echo <<<DEF

We have two students. One is Dipu and onother is Rabbany. Dipu's home district is $dipu and Rabbany's home 
district is $rabbany;
DEF;

?>