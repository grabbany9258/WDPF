<h1>Assosiative Array Sort</h1>

<?php

    $countries= array("Bangladesh"=>"Dhaka", "India"=>"Delhi", "Pakistan"=>"Islamabad", 
    "Malayshia"=>"Qualalampur","Nepal"=>"Kathmundu");

     asort($countries);
    

    ?>

    <table border="1">
        <tr><th>Country Name</th><th>Capital</th></tr>

    <?php
    foreach($countries as $country=>$capital){ ?>

    <tr>
        <td><?php echo $country; ?></td>
        <td><?php echo $capital; ?></td>
    </tr>

    <?php

    }

?>
    </table>


    

