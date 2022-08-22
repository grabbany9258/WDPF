<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>student list</h1>

    <?php
    $sql = "SELECT * FROM students";
    $result = $db->query($sql);
    echo "<h2>Total Record Found : $result->num_rows</h2>";    //num_rows akta built in property to count total data or record found
    while($data = $result->fetch_object()){
        echo "ID: " .$data->student_id;
        echo "Name: " .$data->student_name;
        echo "Email: " .$data->student_email;
        echo "Phone :" .$data->student_phone;
        echo "<br>";
    }



?>

    <!-- <a href="student_entry.php">Show Entry</a> -->
    
</body>
</html>