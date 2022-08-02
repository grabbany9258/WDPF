<h1>Vowel_consonent Check</h1>
    <form action="" method="post">
            <input type="text" name="letter" placeholder="Enter your letter" value=" <?php if(isset($_POST['letter'])) echo $_POST['letter'] ?> ">
            <input type="submit" name="submit" value="Check">
    </form>
<?php

if(isset($_POST['submit'])){
    $check = $_POST['letter'];
    echo check_vowel($check);
}

// function CheckList($ch){
//     $vowel = array("a","e","i","o","u","A","E","I","O","U");
//     if (in_array($ch,$vowel)){
//         return "<h3>$ch</h3>   is a vowel";
//     }
//     else{
//         return "<h3>$ch</h3>  is a consonent";
//     }
// }


function check_vowel($ch) 
{ 
if ($ch == 'a' || $ch == 'e' ||  $ch == 'i' || $ch == 'o' ||  $ch == 'u') 
  echo " $ch is a Vowel" ; 
else
  echo " $ch is a Consonant"; 
} 
check_vowel('h')
?>