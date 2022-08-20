<!-- <form action="" method="post">
    <input type="text" name="number" placeholder="Enter your number"><br>
    <input type="submit" name="submit" value="submit">
</form> -->

<?php
    // if(isset($_POST['submit'])){
    //     $numbers = $_POST['number'];
    //     echo maximum($numbers);

    // }
       
    // Function maximum($numbers){

 
    $numbers = [20,48,70,85,65,58,57,90,23];
    $max = $numbers[0];

    for($i=0; $i<count($numbers); $i++){
        if($max>$numbers[$i]){
           $max = $max;
        //    echo "$max is a maximum number";
           //return;
        }
        else{
            $max=$numbers[$i];
        }
    }
    echo "Maximum Number is " . $max;

?>