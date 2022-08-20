


<?php

//construct method auto call hoy..call korte hoy na...

    class oop{
        private $name;
        public function __construct($x){
            $this->name =$x;
            echo $this->name ."Yes, it's me the object oop . I am here <br>";
        }
        public function sayHello(){
            echo "Hello world <br>";
        }
        public function__destruct(){
            echo ""
        }

    }

    $ob= new oop;
    $ob->sayHello();

    



?>
