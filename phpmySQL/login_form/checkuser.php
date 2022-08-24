<?php
    include_once('config.php');

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $pass = sha1($pass);

    //echo $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
   $result = $db->query($sql);
    //echo $result->num_rows;
    if($result->num_rows!=1){
        $msg = "You may have enter wrong email password";
        header("Location:grb.php?m=$msg");
    }
    else{
        session_start();
        $_SESSION['email'] =$email;
        header('Location:dashboard.php');
    }




?>