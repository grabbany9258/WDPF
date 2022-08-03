<?php
$file ="address.txt";

$datas = file($file);

// print_r($datas);

foreach($datas as $data){
    list($name, $email) = explode(" ", $data);
    echo "<a href ='$email'>$name</a><br>";
}


?>