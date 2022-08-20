
<h1>factorial value:</h1>

<?php 
    if (isset($_POST['submit'])){
        $x= $_POST['number'];
        echo "The value of " . $x . " is " . factorial($x);
        echo "<br>";
    }
    function factorial($grb){
         $factorial =1 ;
        for($i=1; $i<=$grb; $i++){
            $factorial = $factorial * $i ;
        }
        return $factorial;
    }
?>

<form action="" method="post">
    <input type="text" name="number" value="<?php if(isset($_POST['number'])) echo $_POST['number'] ?>" placeholder="Enter your number">
    <input type="submit" name="submit" value="CHECK">
</form>