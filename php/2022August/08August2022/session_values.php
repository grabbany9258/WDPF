<?php
    session_start();

    echo"<pre>";

    print_r($_SESSION);

    // $_SESSION['name']="dipu";
    // $_SESSION['age']="25";

    // unset($_SESSION['age']); // uporer age session k unset kora  hoyece. 2 bar click korte hbe.

   session_destroy();



?>