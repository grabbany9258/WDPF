<?php

// display error korte hbe Xammp a... tahole error ta dkeha jabe na.
    try {
        $fh = require("contacts.txt");
        if (! $fh) {
        throw new Exception("Could not open the file!");
        }
        } catch (Exception $abc) {
        // echo "Error (File: ".$e->getFile().", line ".
        // $e->getLine()."): ".$e->getMessage();

       echo $abc->getMessage();
        }

        echo "Hello, this line shows that "


?>