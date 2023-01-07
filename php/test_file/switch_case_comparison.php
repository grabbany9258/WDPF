<?php
$age = 26;
switch ($age) {
    case ($age >= 20 && $age <= 25):
        echo "You are eligible for enter";
        break;

    case ($age >= 25 && $age <= 30):
        echo "You are not eligible";
        break;

    default:
        echo "Enter valid input";
}
