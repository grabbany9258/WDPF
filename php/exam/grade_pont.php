<h1>Grade Point Check</h1>
<form action="" method="post">
        <input type="text" name="grade" placeholder="Enter your Grade Letter" 
        value ="<?php if(isset($_POST['grade'])) echo $_POST['grade'] ?>" >
        <input type="submit" name="submit" value="Check">
</form>

<?php
    if(isset($_POST['submit'])){
        $n = $_POST['grade'];
        echo gradeCheck($n);
        
        
    }
    function gradeCheck($x){
        if ($x=='A') {
            return "<h2>Excellent</h2>";
            }
        elseif($x=='B') {
            return "<h2>Good</h2>";
        }
        elseif($x=='C') {
            return "<h2>Fair</h2>";
        }
         elseif($x=='D') {
            return "<h2>Poor</h2>";
         }

        
        elseif($x=='F') {
            return "<h2>Failure</h2>";
        }

        else{
            return "<h2>Grade Limit Exceed. Please Type A , B , C , D, or F</h2>";
         }
                

    }




?>