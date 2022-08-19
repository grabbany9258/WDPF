<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method=post>
    <input type="text" name="number" placeholder="input number">
    <input type="submit" name="submit" value="Check">
</form>

<?php
    if(isset($_POST['submit'])){
        $n=$_POST['number'];
        echo primeCheck($n);
    }

    function primeCheck($n){
        if($n==1){
            return "$n is not a prime number";
        }else if($n==2){
            return "$n is a prime number";

        }else{
            for($i=2; $i<$n; $i++){
                if($i % $n==0){
                    return "$n is not a prime number";

                }

            }
            return "$n is prime number";
        }
    }


?>
      
</body>
</html>