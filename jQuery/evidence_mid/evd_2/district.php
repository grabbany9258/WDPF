<?php
    $db = new mysqli("localhost", "root", "", "wdpf51");
   
 
    $id =  $_GET['divid'];

    $sql = "SELECT * FROM districts WHERE dist_divid='$id'";

    $result = $db->query($sql);

    while($row= $result->fetch_assoc()){ 
        
        echo "<option value= '{$row['distid']}'>{$row['distname']}</option>";

    
    } 
 
   



?>