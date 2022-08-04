<?php
$foods = array("pasta", "steak", "fish", "potatoes");
$food = preg_grep("/^p/", $foods); // ^ diye begging theke khuja bujhay..
print_r($food);
?>

<hr>

<?php
$foods = array("pasta", "steak", "fishs", "potatoes");
$food = preg_grep("/s$/", $foods); // $ diye ending bujhay...
print_r($food);
?>

<hr>
<?php
$foods = array("pasta", "steak", "fish", "potatoes" , "steak");
$food = preg_grep("/(ste)/", $foods);
print_r($food);
?>

<hr>

<?php
$foods = array("pasta", "steak", "fish", "potatoes");
$food = preg_grep("/[pfs]/", $foods);
print_r($food);
?>