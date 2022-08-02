
<h1>Prime Number Check</h1>
<form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number" value=" <?php if(isset($_POST['number'])) echo $_POST['number'] ?> ">
        <input type="submit" name="submit" value="Check">
</form>


<?php
if(isset($_POST['submit'])){
    $n= ($_POST['number']);
    echo primeCheck($n);

}

function primeCheck($y){
    if($y==1){
        return $y . " is not a prime number.";
    }
    else if($y==2){
        return $y . " is a prime number.";
    }
    else{
        for($i=2; $i<$y; $i++){
            if($y % $i == 0){
                return $y . " is not a prime number.";
            }
        }
        return $y . " is a prime number.";
    }
}

?>
