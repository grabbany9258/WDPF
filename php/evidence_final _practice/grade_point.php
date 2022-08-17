<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grade point </h1>
    <form action=""method="post">
        Number: <br>
        <input type="number" name="number" placeholder="Enter your Number"> <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
         if(isset($_POST['submit'])){
            $num= $_POST['number'];
        

            if($num>=80){
                echo "Your Grade Point is A+";
            }
            elseif($num>=70){
                echo "Your Grade Point is A";
            }
            elseif($num>=60){
                echo "Your Grade Point is A-";
            }
            elseif($num>=50){
                echo "Your Grade Point is B";
            }
            elseif($num>=40){
                echo "Your Grade Point is C";
            }
            elseif($num>=33){
                echo "Your Grade Point is D";
            }
            else{
                echo "Your Grade Point is F";
            }
        }
    ?>
</body>
</html>