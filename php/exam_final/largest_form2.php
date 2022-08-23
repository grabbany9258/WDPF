<h1>Finding Largest Number</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your numbers">
        <input type="submit" name="submit" value="FIND OUT">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        echo maxNumber($number);
    }

    Function maxNumber($n){
        $numbers =(explode("," , $n));
        echo "<h2>Submitted Numbers are</h2>";
        echo $n ."<br>";

        $max = $numbers[0];
        foreach($numbers as $num){
            if($num>=$max){
                $max = $num;
            }

        }

        $min = $numbers[0];
        foreach($numbers as $num){
            if($num<=$min){
                $min = $num;
            }

        }
        echo "<h2>maximum Number is $max</h2>";
        echo "<h2>minimum Number is $min</h2>";
            

        

    }
       
    ?>