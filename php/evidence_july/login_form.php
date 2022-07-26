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
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $email = $_POST['email'];


        if(strlen($login)>8 || strlen($login)<4){
            echo "Invalid login name";
        }else{
            echo "Valid login name";
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Valid email address";
        }else{
            echo "Inavlid email address";
        }
    }
    
    ?>



    <h2>Login form</h2>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Enter user Name"><br>
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="LOGIN">

    </form>
</body>
</html>