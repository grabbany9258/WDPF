<?php
    $emails= "jason@gmail.com, abc@gmail.com";
    $replaced= str_replace("@" ,"(at)", $emails);
    echo "Contact the authore of this article at $replaced";


?>