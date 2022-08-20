<h1>Vowel-Constant Check</h1>
<form action="" method="post">
<h3>Letter:</h3> 
    <input type="text" name="letter" placeholder="Enter your letter"> <br> <br>
    <input type="submit" name="submit" value="CHECK">
</form>

<?php
    if(isset($_POST['submit'])){
       $letter = $_POST['letter'];
       echo vowelConst($letter);
    }

    Function vowelConst($x){
        $vowels = array("a","e","i","o","u","A","E","I","O","U");

        if($x==""){
            echo "<h3> Please Put a letter</h3>";
            return;
        }

        if(in_array($x,$vowels)){
            echo "<h3> The Letter $x is vowel</h3>";
            return;
        }
        else{
            echo "<h3>The Letter $x is consonent </h3>";
        }

    }

?>