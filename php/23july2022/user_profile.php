<?php
    function userProfile(){
        $profile = array("Golam Rabbany", "Round51", "WDPF");
        return $profile;
    }

    $x = userProfile();
    // echo "<pre>";
    // var_dump($x);

    list($name, $round, $course) = userProfile();
    echo "Datails about a trainee $name, $round, $course";


?>