<?php
    // checkLetters("I");
    
    // function checkLetters($l){
    //     $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    //     if (in_array($l, $vowels)){
    //         echo "{$l} is vowel.";
    //         }
    //         else{
    //             echo "{$m} is constant.";
    //         }
    // }
?>

<?php

function check_vowel($ch) 
{ 
if ($ch == 'a' || $ch == 'e' ||  $ch == 'i' || $ch == 'o' ||  $ch == 'u') 
  echo "$ch is a Vowel" ; 
else
  echo "$ch is a Consonant"; 
} 
check_vowel('A');


?>