<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            border: 1px solid blue;
            padding: 25px;
            font-size: 16px;
            background-color:red;
            width:200px;
        }
        .success{
            width: 200px;
            padding: 25px;
            font-size: 16px;
            background-color:green;

        }
        
    </style>
</head>
<body>
    <?php

    

    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $email = $_POST['email'];

        $errors =array();

        if($login==''){
            $errors[] = "Login must be filled up";
        }

        if($email==''){
            $errors[] = "Email must be filled up";

        }
        


        if(strlen($login)>8 || strlen($login)<4){
            $errors[] = "login  must be 4 to 8 letter";
        }
       
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Valid Email must";
        }
    
    

    if(count($errors)>0){
        echo "<ul class ='error'>";
        foreach($errors as $err){
            echo "<li> $err </li>";
        }
        echo "</ul>";
    }else{
        echo "<div class =\"success\"> Login Successfull</div>";
    }
}
    
    ?>

    <h2>Login form</h2>
    <form action="" method="post">
        <input type="text" name="login" value="<?php if(isset($login)) echo $login; ?>" placeholder="Enter user Name"><br>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="LOGIN">

    </form>
</body>
</html>