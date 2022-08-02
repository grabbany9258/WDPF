<h1>Grade Point Check</h1>
<form action="" method="post">
        <input type="text" name="grade" placeholder="Enter your Grade">
        <input type="submit" name="submit" value="Check">
</form>

<?php
    if(isset($_POST['submit'])){
        $n = $_POST['grade'];
        echo gradeCheck($n);
        
        
    }
    function gradeCheck($n){
        if ($n=='A') {
            return "<h2>Excellent</h2>";
            }
        elseif($n=='B') {
            return "<h2>Good</h2>";
        }
        elseif($n=='C') {
            return "<h2>Fair</h2>";
        }
         elseif($n=='D') {
            return "<h2>Poor</h2>";
         }
        elseif($n=='F') {
            return "<h2>Failure</h2>";
        }
                

    }




?>