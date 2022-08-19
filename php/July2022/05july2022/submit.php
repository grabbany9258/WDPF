<?php

    // echo"<pre>";

    // print_r($_GET);

    // print_r($_POST);  for post method

    // $_REQUEST = $_POST OR $_GET

    print_r($_REQUEST);

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pswd'];
    echo "You have to login with your email {$email} and password {$pass}";

    echo "<pre>";
    print_r($GLOBALS);






?>
