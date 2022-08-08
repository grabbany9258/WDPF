<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Email sender</h1>
    <form action="" method=post>
        To: <br>
        <input type="text" name="email" placeholder="Enter Reciver Email"> <br> <br>
        Subject: <br>
        <input type="text" name="subject" placeholder="Enter subject"> <br> <br>
        Email Body: <br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea> <br> 
        <input type="submit" name="submit" value="SEND">


        <?php
        if(isset($_POST['submit'])){

            include "phpmailer.php";
        }

        ?>

    </form>
</body>
</html>