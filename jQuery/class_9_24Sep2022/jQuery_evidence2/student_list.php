<?php
    $db = new mysqli("localhost", "root", "", "wdpf51_batch_students");

    // echo $_GET ['bid'];

 
    $id =  $_GET['bid'];

    $sql = "SELECT * FROM students WHERE st_batch_id = '$id'";

    $result = $db->query($sql);

    while($row= $result->fetch_assoc()){
        echo $row['student_name'] . "<br>";
    }

?>