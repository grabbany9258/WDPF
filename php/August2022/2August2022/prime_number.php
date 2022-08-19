<h1>Prime number Check</h1>

<form action="" method="POST">
    <input type="text" name="number" placeholder="Enter your number"> <br>
    <input type="submit" name="sumbit" value="CHECK">
</form>

<?php
if(isset($_POST['submit'])){
    $n = $_POST['number'];
    echo primeCheck($n);

}

function primeCheck($x){
    if($x==1){
        echo $x . "is not a prime number";
        return
    }
    else if($x==2){
        return $x . "is a prime number";
    }
    else{
        for($i=2; $i<$x; $i++){
            if($i % $x== 0){
                return $x . " is not a prime number";
            }
        }
        return "$x is a prime number";
    }
}



?>