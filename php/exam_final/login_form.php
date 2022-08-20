<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .null{
            color:#0B7017; 
        }
    </style>


</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="post">
    Email: <br>
    <input type="text" name="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"> <br> 
    Password: <br>
    <input type="password" name="password" placeholder="Enter your Password" value="<?php if(isset($_POST['password'])) echo $_POST['password']  ?>"> <br> 
    <input type="submit" name="submit" value="submit">
    </form>

    <?php
       if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $pass= $_POST['password'];
        $validEmail = 0;
        $validPass = 0;

        if($email == null && $pass == null){
            echo "<h3 class='null'>Please Enter Email & Password both.</h3>";
            return;
        }

        // Email validation started.
        else if($email== null){
            echo "Enter Your Email ";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Enter Valid Email <br>";
            return;
        }
        else{
            $validEmail= 1;
        }

        // Password validation started.
        if($pass== null){
            echo "Enter Your password";
            return;
        }
        else if(strlen($pass)>8 || strlen($pass)<4){
            echo "Enter Password 4 to 8 digit.";
            return;

        }

        else{
            $validPass = 1;
        }

        if( $validEmail= 1 &&  $validPass = 1){
            echo "You have succesfully logged in";

        }
       } 
    ?>
</body>
</html>