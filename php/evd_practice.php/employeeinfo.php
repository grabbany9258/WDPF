<?php

$id = $_POST['id'];
$name = $_POST['name'];
$basic = $_POST['basic'];
$house = $_POST['house'];
$transport = $_POST['transport'];
$salary = $basic+$house+$transport;

echo "<h2>Employee Information</h2>";
echo "<p>ID: $id</p>";
echo "<p>Name: $name</p>";
echo "<p>Total salary: $salary</p>";

?>
