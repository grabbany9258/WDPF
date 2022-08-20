<?php

$divisions = array("Dhaka"=>"buriganga", "Sylhet"=>"surma", "Khulna"=>"rupsha");

$numbers = range(50,100);

echo array_search("surma", $divisions );
echo "<br>";

echo array_search(90, $numbers);

?>