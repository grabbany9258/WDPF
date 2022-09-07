 <h1>Login Form</h1>
 <form action="checkuser.php" method="post">
    Email: <br>
    <input type="text" name="email" placeholder="Enter your Email"> <br>
    Password: <br>
    <input type="password" name="pass" placeholder="Enter your Password"> <br>
    <input type="submit" name="submit" value="submit"> 
 </form>

 <?php
    if(isset($_GET['m'])){
       $msg = $_GET['m'];
       echo $msg;
    }


?>