<h1>Factorial Number </h1>
<form action="" method="post">
    <input type="text" name="number" placeholder="Enter your number"><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        echo "The value of " .$number. " is " .factorial($number);
    }

    Function factorial($x){
        $factorial = 1;
        for($i=1; $i<=$x; $i++){
            $factorial = $factorial * $i ;
        }
        return $factorial;
    }


?>