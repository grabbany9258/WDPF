<?php
    include_once('dbconfig.php');

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $pass = sha1($pass);
        echo "<br>";

        //echo $sql = "SELECT * FROM users WHERE email ='$email' AND password= '$pass'";
        

        $sql = "SELECT * FROM users WHERE email ='$email' AND password= '$pass'";
        $result = $db->query($sql);

        //echo $result->num_rows;

      if ($result->num_rows!=1){
        $msg ="You may enter wrong email password";
        header("Location:index.php?m=$msg");
      }
      else{
        session_start();
        $_SESSION['email'] = $email;
        header('Location:dashboard.php');
      }
      






?>