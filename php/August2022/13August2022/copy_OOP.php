<?php
class Employee {
private $name;
function setName($name) {
$this->name = $name;
}
function getName() {
return $this->name;
}
}
$emp1 = new Employee();
$emp1->setName('Rabbany');
$emp2 = clone $emp1; // clone na korle $emp1 $emp2 hoye jay...  r clone kora hole notun object hoa jay.. 

$emp2->setName('Toki');

print_r($emp1);
echo "<br>";
print_r($emp2);

// echo "Employee 1 = {$emp1->getName()}\n <br>";

// echo "Employee 2 = {$emp2->getName()}\n";

?>