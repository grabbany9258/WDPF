<?php
class Employee {
public static $favSport = "Football";
public static function watchTV()
{
echo "Watching ".self::$favSport;
}
}
class Executive extends Employee {
public static $favSport = "Polo";
}
echo Executive::$favSport;
echo "<br>";
echo Employee::$favSport;

echo "<hr>";

echo Executive::watchTV();
echo "<br>";
echo Employee::watchTV();


?>