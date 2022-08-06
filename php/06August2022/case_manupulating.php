<?php
    $str = "Hello Oil, How are you? We people are feeling very bad with raising your price";
    $lower = strtolower($str);
    echo "All in lowercase: $lower<br>";

    echo "<hr>";

    $ucfirst =ucfirst($lower);
    echo "First letter in uppercase: $ucfirst <br>";
    echo "<hr>";

    $ucwords =ucwords($lower);
    echo "All in uppercase: $ucwords <br>";
    echo "<hr>";

    $ucwords =ucwords($upper);
    echo "All in uppercase: $ucwords <br>";




?>