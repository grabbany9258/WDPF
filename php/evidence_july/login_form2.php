
<h2>Login Form</h2>
<form action="" method="post">
    <input type="text" name="login" placeholder="Enter login name" value="<?php if(isset($_POST['login'])) echo $_POST['login'] ?>">
    <input type="text" name="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])) echo $_POST ['email'] ?>">
    <input type="submit" name="submit" value="LOGIN">
</form>

<?php
if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $email = $_POST['email'];
    $validLogin = 0 ; //for invalid login
    $validEmail = 0; //for invalid email

if($login == null && $email == null){
    echo "Enter your name & email";
    return;

}else if($login == null){
    echo "Enter your name";

}else if(strlen($login)>8 || strlen($login)<4){
echo "Name must be 4 to 8";
}

else{
    $validLogin = 1;
}

// Login part end


// Email part start

if($email == null){
    echo "Enter your email";
return;
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Valid email must";
    return;
}else{
    $validEmail = 1;
}
if($validLogin == 1 && $validEmail == 1){
    echo "You are successfully logged in!";
 }
}
?>