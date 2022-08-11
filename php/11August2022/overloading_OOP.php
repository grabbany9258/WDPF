<?php
    class Employee
    {
    public $name;
    public function __set($propName, $propValue) //  property age declare na korle poreo ai magic method diye kora jay.
    {
    $this->$propName = $propValue;
    }
    }
    $employee = new Employee;
    $employee->name = "Mario";
    $employee->title = "Executive Chef";
    $employee->address = "Shyamoli";

    echo "Name: {$employee->name}<br />";
    echo "Title: {$employee->title}<br>";
    echo "Address: {$employee->address}<br>";


?>