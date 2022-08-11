<?php
    
    class Visitor
    {
    private static $visitors = 0;
    function __construct()
    {
    self::$visitors++;
    }
    static function getVisitors()
    {
    return self::$visitors;

    }
    }

    // instantiate visitors class

    $visits = new visitor();
    echo Visitor::getVisitors();

    echo "<br>";


    $visits2 = new visitor();
    echo Visitor::getVisitors();

?>