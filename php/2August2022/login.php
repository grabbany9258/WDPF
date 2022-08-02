
<h1>Login Form</h1>
<form action="" method="post">
    <input type="text" name="login" placeholder="Enter your username"> <br>
    <input type="text" name="email" placeholder="Enter your email"> <br>
    <input type="submit" name="submit" value="CHECK"> 

</form>

<?php
    if(isset($_POST['submit'])){
        $login= $_POST['login'];
        $email= $_POST['email'];
        $validlogin=0;
        $validemail=0;

        // echo $login;

        if ($login== null && $email== null){
            echo "Please put Username and Email <br>";
            
             return;
        }

        else if($login==null){
            echo "Enter Username";
        }
        else if(strlen($login)>8 || strlen($login)<4){
            echo "Please Put username between 4 to 8 letter";
        }
        else{
            $validlogin =1;
        }

        if($email==null){
            echo "Enter Email address";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){   
            echo "Enter valid email <br>";
            return;
         }
        else{
            $validemail =1;
        }

        if($validlogin ==1 && $$validemail==1){
            echo "You have logged in Successfully";
        }


    }

?>