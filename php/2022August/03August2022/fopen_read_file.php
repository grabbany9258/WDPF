<?php
    $file = "myfile.txt";
    $fh =fopen($file , "r"); // r for read

    // print_r($fh);
    // echo fgets($fh);

    while(!feof($fh)){
        echo fgets($fh). "<br>";
    }

    fclose($fh);
?>

<hr>
<?php


    $file = "myfile.txt";
    $fh =file($file);  // file function array akare output dey

    print_r($fh);




?>
