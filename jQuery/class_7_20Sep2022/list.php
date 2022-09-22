<?php
 //echo "Hello";
//echo $_GET['mydata'];

if($_GET['mydata']=='Good'){
    $good = array("aminul", "sakib", "fayzullah","rahi");
    echo getNames($good);
}
else if($_GET['mydata']=='Bad'){
    $bad = array("sohel", "joynal","rakib", "mahir");
    echo getNames($bad);
}


function getNames($items){
    $output = "<ul>";
    for($i=0; $i<count($items); $i++){
        $output .= "<li>" .$items[$i] . "</li>";

    }
    $output .= "</ul>";
    return $output;

}

// echo getNames($persons);
?>