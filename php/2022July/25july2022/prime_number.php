<?php
// function check_prime($num)
// {
//    if ($num == 1)
//    return 0;
//    for ($i = 2; $i <= $num/2; $i++)
//    {
//       if ($num % $i == 0)
//       return 0;
//    }
//    return 1;
// }
// $num = 20;
// $flag_val = check_prime($num);
// if ($flag_val == 1)
//    echo "It is a prime number";
// else
//    echo "It is a non-prime number"
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number">
        <input type="submit" name="submit" value="Check">
    </form>

<?php
  
  if(isset($_POST['submit'])){

    $n = $_POST['number'];
    echo primeCheck($n);
  }
  
  function primeCheck($n){
    if($n == 1){ 
        return "$n is not a prime number";
    }else if($n == 2){
        return "$n is a prime number";
    }else{
        for($i=2; $i<$n; $i++){
            if($n % $i == 0){
                return "$n is not a prime number";
            }
            
        }
         return "$n is a prime number";
    }
}
    


?>
</body>
</html>

 