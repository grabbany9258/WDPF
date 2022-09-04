<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Login</h1>
    <?php
    if(isset($_POST['login'])){
        // extract($_POST);
        $email=$_POST['email'];
        $password=$_POST['password'];
        // $password=sha1($password);    //aekhane password incription use er jonno
        //connection naoar jonno
    $db = new mysqli('localhost','root','','idb_bisew');
    $sql = "SELECT * FROM user where email = '$email' AND password ='$password'";
    //aekhane email and password from database table user feild name
    // $db->query($sql);

    $result=$db->query($sql);

    // condition chalano

    if($result->num_rows==1){
        echo "<h2>valid User</h2>";
    }else{
        echo "<h2>InValid User</h2>";
    }

    }


    ?>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter Valid Email"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" name="login" value="LOGIN">
    </form>
</body>
</html>