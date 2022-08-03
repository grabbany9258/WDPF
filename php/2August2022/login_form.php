<h1>Login Form</h1>
<form action="" method="post">
    <input type="text" name="login" placeholder="Enter Your Username"> <br>
    <input type="text" name="email" placeholder="Enter Your email"> <br>
    <input type="submit" name="submit" value="CHECK">
</form>

<?php
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $email = $_POST['email'];
        $validLogin = 0;
        $validEmail = 0;

        echo $email;
    }

    //  function



?>