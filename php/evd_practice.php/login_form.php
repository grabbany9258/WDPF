<h1>Login Form</h1>

<form action=""method="post">
    <input type="text" name="login" placeholder="Enter your username" value="<?php if(isset($_POST['login'])) echo $_POST['login'] ?>"> <br>
    <input type="text" name="email" placeholder="Enter your email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"> <br>
    <input type="submit" name="submit" value="CHECK">
</form>



<?php
    if (isset($_POST['submit'])){
        $login = $_POST['login'];
        $email = $_POST['email'];
        $validlogin = 0;
        $validemail = 0;
   

    if ($login== null && $email== null){
        echo "Please put Username and Email <br>";
        
         return;
    }

        else if($login == null){
            echo "Enter Your Name <br>";   
        }
        else if(strlen($login)>8 || strlen($login)<4){
            echo "Must enter username 4 to 8 letter <br>"; 
        }

        else{
            $validlogin=1;
        }


        if ($email == null){
            echo "Please enter correct email <br>"; 
            return;
        }
         else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){   
            echo "Enter valid email <br>";
            return;
         }
         else{
            $validemail =1;
         }

         if($validemail==1 && $validlogin==1){
            echo "Login successfull";
         }

     }





?>

