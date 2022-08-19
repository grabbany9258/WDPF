<?php

//avoid any kinds of tags..show plian text.
$input = "This <a href ='http://www.example.com/'>example</a> is <b>awesome</b>!";

echo strip_tags($input);


?>
