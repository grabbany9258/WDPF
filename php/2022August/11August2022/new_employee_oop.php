<?php

class Employee
{
private $name;
private $title;

protected  $wage; // outside creat a subclass named as programmer

public function getName() {
return $this->name;
}

public function setName($name) {
$this->name = $name;
}

public function sayHello() {
echo "Hi, my name is {$this->getName()}.";
}

public function setwage($money){
    $this->wage = $money;

}
}




//////////////////////////////////////


$obj = new Employee();

$obj->setName("Rabbany");
$obj->setWage("10000");

// // print_r($obj);

// echo $obj->getName();

// echo "<br>";

// $obj->sayHello();



class programmer extends Employee{
    public function bonus($percent){
        $amount = $this->wage * $percent/100;
        return $amount ;
    }
}

$obj1 = new programmer();
$obj1->setName("Rabbany");
$obj1->setWage(10000);
echo $obj1->bonus(5);

// print_r($obj1);

?>