<?php
     class fruite{
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    $apple = new fruite;
    $apple->set_name('Apple');
    echo $apple->get_name();

?>