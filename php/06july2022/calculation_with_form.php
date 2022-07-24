<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 
        
        if(isset($_POST['submit'])){
            $f = $_POST['first'];
            $l = $_POST['last'];
            
            if($f==null || $l==null){
                echo "Please put both values";}
                else{ 
                    $sum = $f + $l;
                    echo "Sum of those numbers is ".$sum. "<br>";

                }
            // echo "Your first number is $f<br>";
            // echo "Your last number is $l<br>";
            // echo "Sum of those numbers is ".$sum. "<br>";
        }



        // if($_SERVER['REQUEST_METHOD']=='POST'){

        //     $f = $_POST['first'];
        //     $l = $_POST['last'];
        //     // if($f==''|| $l==''){     //if ar  ai line ar bodole niche empty diyw kora jay
        //      if($f==null || $l==null){
        //     //if(empty($f)|| empty($l)){
        //         echo "Please put both values";

        //     }else{
        //         $sum =$f + $l ;
        //         $sub =$f - $l ;
        //         echo "Your first number is $f <br>";
        //         echo "Your last number is $l <br>";
        //         echo "sum of those numbers is" . $sum . "<br>";
        //         echo "substraction of those numbers is" . $sub . "<br>";
        //         echo "Multiplication of those numbers is " . $f * $l . "<br>";
        //         echo "Divison of those numbers is " . $f / $l . "<br>";


        //     }
            
        // }


    ?>





    <h1>Calculation with form </h1>

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
        <input type="text" name="first" placeholder="Enter first name"> <br>
        <input type="text" name="last" placeholder="Enter last name"> <br>
        <input type="submit" name="submit" value="Calcultaion">


    </form>
</body>
</html>