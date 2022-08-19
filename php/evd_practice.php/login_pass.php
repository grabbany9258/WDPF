
<h1>Login Form</h1>
<form action="" method="post">
    Email: <br>
    <input type="text" name="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])) echo $_POST ['email'] ?>"> <br>
    Password: <br>
    <input type="password" name="password" placeholder="Enter your password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"> <br>
   
    <input type="submit" name="submit" value="LOGIN">
</form>

<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $validEmail = 0 ; //for invalid email
        $validPass = 0; //for invalid Password

    if($email == null && $pass == null){
        echo "<h2>Enter your email & Password </h2>";
        return;

    }else if($pass == null){
        echo "<h2>Enter your Password </h2> ";
    }
    else if(strlen($pass)>8 || strlen($pass)<4){
    echo "<h2> Password must be 4 to 8 </h2>";
    }
    else{
        $validPass = 1;
    }
    // Login part end

    // Email validation part started.

    if($email == null){
        echo "<h2>Enter your email </h2> ";
    return;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<h2> Enter valid email </h2>";
        return;
    }
    else{
        $validEmail = 1;
    }
    if($validEmail == 1 && $validPass == 1){
        echo "<h2>You are successfully logged in! </h2>";
    }
}
?>