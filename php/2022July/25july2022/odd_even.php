
    <h1>Odd Even Number Check</h1>
    <form action="" method="post">
            <input type="text" name="number" placeholder="Enter your number" value=" <?php if(isset($_POST['number'])) echo $_POST['number'] ?> ">
            <input type="submit" name="submit" value="Check">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $x = ($_POST['number']);
            echo odd_even($x);
            
        }

        function odd_even($OE){
            if ($OE % 2==0){
                return "$OE is a even number <br>";
            
             }else{
                 return "$OE is odd number <br>";
         }
        }
        
    ?>


    
    


