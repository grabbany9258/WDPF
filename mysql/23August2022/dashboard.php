<?php
session_start();
if(!isset($_SESSION['email'])){  // age thekei jodi email validate thake then dhukte dibe naile agei ber kore dbe.. ber kore index page a pathay dbe.. 
    header('Location:index.php');

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            padding: 30px;
        }
    </style>

</head>
<body>
    <h1>Welcome to Dashboard</h1>
    <?php
    
    echo "   Logged in by user "  .  $_SESSION['email'];  
    echo "<br>";
    // echo session_id();
    ?>
    <br>
    <br>
    <br>

    <a href="logout.php"><h2 class="h2"> Logout</h2></a>
</body>
</html