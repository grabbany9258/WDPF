<?php

    fopen("file.txt" 'r');

    $errors = error_get_last();

    print_r($errors);

?>