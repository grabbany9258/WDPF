<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student form Data Add in Data.txt file</h1>

    <?php
        if(isset($_POST['submit'])){
            $id= $_POST['id'];
            $name= $_POST['name'];
            $email= $_POST['email'];
            $contact= $_POST['contact'];


            $total = $id. " " .$name. " " .$email. " " .$contact."\n";

            $file = fopen("data.txt", "a");
            fwrite($file, $total);
            }

        // fclose($file);

    ?>

    <form action="" method="post">
        ID: <br>
        <input type="text" name="id" palceholder="Enter your id"> <br>
        Student Name: <br>
        <input type="text" name="name" palceholder="Enter your name"><br>
        Student Email: <br>
        <input type="text" name="email" placeholder="Enter your email"> <br>
        Contact Number: <br>
        <input type="text" name="contact" placeholder="Enter your number"> <br>

        <input type="submit" name="submit" value="SEND">

    </form>

    <h2>Showing Data with Table:</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>

        <?php
            $file1 = file("data.txt");
            foreach($file1 as $line){
                list($id1, $name1, $email1, $contact1)= explode(" ", $line);
                echo "<tr>
                        <td>$id1</td>
                        <td>$name1</td>
                        <td>$email1</td>
                        <td>$contact1</td>
                    </tr>";
            }
        ?>
    </table>            
</body>
</html>