<?php

if(isset($_POST['submit'])){
    $x= $_POST['number'];
    echo "The factorial of " . $x . " is " . Factorial($x);
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
        <input type="text" name="number"  placeholder="Enter user number" value="<?php if(isset($_POST['number'])) echo $_POST ['number'] ?>"><br>
        <input type="submit" name="submit" value="CHECK">

    </form>