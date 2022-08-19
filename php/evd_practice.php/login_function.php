<h1>Login Form</h1>

<form action="" method="post">
    <input type="text" name="email" placeholder="Enter your Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"> <br>
    <input type="password" name="pass" placeholder="Enter your password" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'] ?>"> <br>
    <input type="submit" name="submit" value="CHECK">
</form>

<?php
    
        function emailpass(){

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $validEmail = 0;
        $validPass = 0;

    if ($email== null && $pass== null){
        echo "Please put Email and Password <br>";
        
        //  return;
    }
        else {
            
             if($email== null){
                echo " Please Enter Email";
             }
             else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Enatr Valid Email";
             }
             else{
                $validEmail = 1;
             }

            if($pass == null){
                echo "Enter Your Password <br>";   
            }
            else if(strlen($pass)>8 || strlen($pass)<4){
                echo "Must enter password 4 to 8 letter <br>"; 
            }
    
            else{
                $validPass=1;
            }
            if($validEmail==1 && $validPass==1){
                echo "Login successfull";
             }    
        }
    }
        if (isset($_POST['submit'])){
            emailpass();
     }

   



?>

