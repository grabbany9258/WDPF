<h1>Login Form</h1>
<form action="checkUser.php" method="post">
    Email: <br>
    <input type="text" name="email" placeholder="Enter your Email"> <br>
    Password: <br>
    <input type="password" name="pass" placeholder="Enter your Password"> <br> <br>
    <input type="submit" name="submit" value="LOGIN"> 

</form>

<?php
if(isset($_GET['m'])){
    $msg =  $_GET['m'];
    echo  $msg;
}

?>