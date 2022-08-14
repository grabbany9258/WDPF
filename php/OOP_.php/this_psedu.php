<?php
class SimpleClass
{
    // property declaration
    public $var = 'Hello Simple Class';
    public $grb = 'Hello WDPF Class';
 
    //  method declaration 
    public function sayHello() {
        echo $this->var; // use $this to show $var value
    }

    public function sayHi() {
        echo $this->grb; // use $this to show $var value
    }
}
$obj=new SimpleClass;
$obj->sayHello(); // Result: Hello Simple Class
$obj->sayHi(); // Result: Hello Simple Class
?>