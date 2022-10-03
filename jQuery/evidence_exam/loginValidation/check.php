<?php
    $db = new mysqli('localhost', 'root', '', 'wdpf51');

     $email =  $_POST['email'];
     $pass =  md5($_POST['pass']);

     $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$pass'";
     $result = $db->query($sql);
     if($result->num_rows>0){
        echo "Login Successful";
     }
     else{
        echo "Invalid username & password";
     }


?>