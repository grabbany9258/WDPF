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
        echo grade($num);
    }



        function grade($num){

       
        if($num==""){
            return "You must have to put your marks";
        }
       
        else if($num>=90 && $num<=100){ 
            return "You have obtained A+ grade";
        }
        
        else if($num>=80 && $num<=89){
            return "You have obtained A grade";
        }
        else if($num>=60 && $num<=79){
            return "You have obtained A- grade";
        }
        
        else if($num>=0 && $num<=59){
            return "You have obtained F grade";
        }
        else if($num>=101 && !is_int($num)){
            return "You have to put number between 1 to 100 instead of putting letter or more than 100";
        }
        else{
            return "You have puted mis information, Please Enter Proper Values.";
        }
       
    }

    ?>
</body>
</html>