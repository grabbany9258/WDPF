<?php $db = new mysqli('localhost', 'root', '', 'wdpf51');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Student Entry</h1>
    <form action="" method="post">
        ID: <br>
        <input type="number" name="id" placeholder="Enter your ID"> <br>
        Name: <br>
        <input type="text" name="name" placeholder="Enter your Name"> <br>
        Email: <br>
        <input type="email" name="email" placeholder="Enter your Email"> <br>
        phone: <br>
        <input type="text" name="phone" placeholder="Enter your phone"> <br> <br>

        <input type="submit" name="submit" value="submit"> <br> <br>
        <a href="student_list.php">Show Entry</a>

    </form>

    <?php
    if(isset($_POST['submit'])){
       $id = $_POST['id'];
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];

       $sql = "INSERT INTO students VALUES ('$id','$name', '$email','$phone' )";
       $db->query($sql);
       if($db->affected_rows>0){
        echo "Successfully inserted";
       }
    }

    ?>
</body>
</html>