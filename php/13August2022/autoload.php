<?php
    function __autoload($class) {
        require_once("classes/{$class}.class.php");

        }

    
        $ev = new Events;

        // echo get_class($ev);

        $ev->name = "Get together";
        print_r($ev);

        echo class_exists("Patrons");
   
        // echo phpinfo();

        


?>