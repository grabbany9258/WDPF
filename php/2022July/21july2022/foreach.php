<?php

// Numeric indexed array:

    $subjects =array("PHP", "JAVA", "PYTHONE", "ORACLE", "C#");

    foreach($subjects as $sub){
        echo " $sub is my subject. ";
        echo "<br>";

    }

?>
<hr>

<?php

    // Associative array:

    $languages =array("PHP"=>"http://www.php.net", "JAVA"=>"http://www.java.com", "PYTHONE"=>"http://www.pythone.com", 
    "ORACLE"=>"http://www.python.org", "C#"=>"http://www.asp.net");

    foreach($languages as $lang=>$website){
        echo "My language is $lang and its site is <a href=\"$website\" target=\"_blank\">$website</a><br>"; // for both index and value

    }


    echo "<br>";

    echo rand(1,50)


?>