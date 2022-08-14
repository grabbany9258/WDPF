<?php
     class fruite{
        public $name= "Hello bangladesh";
        public $color = "i am the student of WDPF";

        function set_name(){
          echo  $this->name ;
        }

         function get_name(){
             echo $this->color;
        // }
        // function set_color ($color){
        //     $this->color = $color;
        // }
        // function get_color(){
        //     return $this->color;
        // }
    }
}

    $obj = new fruite;

    $obj->set_name();
    $obj->get_name();
    // $obj->set_color('Red');
    // echo $obj->get_name();
    // echo $obj->get_color();

?>