<?php
include_once('dbconfig.php');

    $email = $_POST['email'];
    $pass = $_POST['pass'];
  echo "<br>";

   $pass = sha1($pass);

  //echo "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

   $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
   $result = $db->query($sql);
   
   if ($result->num_rows!=1){
        $msg = "Email or password may be wrong";
        header("Location:index.php?m=$msg");
   }
   else{
    session_start();
    $_SESSION['email'] = $email;
    header("Location:dashboard.php");
}

       //echo "Email or password may be wrong";
    
    // include_once('index.php');
//     header("Location:index.php?m=$msg"); // redirect kore fire asbe same page a.. 
//    }
    


?>