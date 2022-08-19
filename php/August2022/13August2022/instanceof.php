<?php

    class Teacher{

        public $name;
        public $age;
        public $qualification;

        function teach(){

        }
        function assignment(){

        }

    }
    class student{


    }
    $st = new Student();

    if($st instanceof Teacher){
        echo "Yes";

    }else{
        echo "NO";
    }

    echo "<hr>";

    echo class_exists("Teacher"); // class ace kina ta dekhabe.. 1 or 0 akare.

    echo "<hr>";

    echo get_class($st);  // class name dekhay..

    echo "<hr>";

    $methods = get_class_methods("Teacher"); //Methods koyta ace show kore.... 

    print_r($methods);

    echo "<hr>";

    $vars = get_class_vars("Teacher");
    print_r($vars);









?>