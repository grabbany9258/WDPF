<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grade system</h1>
    <form action="" method="post">
      Number: <br>  
    <input type="text" name="number" placeholder="Enter Number"> <br>
    <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
        $num = $_POST['number'];

        if($num==""){
            echo "You must have to put your marks";
        }
        elseif(!is_int($num)){
            echo "You have to put Marks as Number not Letter";
        }

        elseif($num>=90){
            echo "You have obtained A+ grade";
        }
        elseif($num>=80){
            echo "You have obtained A grade";
        }
        elseif($num>=60){
            echo "You have obtained A- grade";
        }
        else{
            echo "You have obtained F grade";
        }
    }
    ?>
</body>
</html>