<?php

if(isset($_POST['submit'])){
    $number= $_POST['number'];
    echo Factorial($number);
}

function factorial($grb){
    $factorial = 1;
    for ($i = 1; $i <= $grb; $i++){
    $factorial = $factorial * $i;
    }
    return $factorial;
}
 

// $number = 5;
// $fact = Factorial($number);
// echo "Factorial = $fact";
?>

<h2>Factorial Number</h2>
    <form action="" method="post">
        <input type="text" name="number" value="<?php if(isset($number)) echo $number; ?>" placeholder="Enter user number"><br>
        <input type="submit" name="submit" value="CHECK">

    </form>