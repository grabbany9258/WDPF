<?php
    $db = new mysqli('localhost', 'root', '', 'wdpf51');
    $id =  $_GET['id'];

    $sql = "DELETE FROM students WHERE student_id='$id'";

    $db->query($sql);

    if($db->affected_rows>0){
        // echo " Rows Deleted";  Echo dewa jay avabe tahole oi page a show korbe
        header("Location:student_list.php"); //ata korle delete hoye abar rederect hoye jabe . 
    }


?>