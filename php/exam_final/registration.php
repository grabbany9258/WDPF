<h1>Registration validation</h1>
<form action="" method="post">
    Name: <br>
    <input type="text" name="name" placeholder="Enter your Name"> <br> <br>
    Email: <br>
    <input type="text" name="email" placeholder="Enter your Email"> <br> <br>
    Password: <br>
    <input type="password" name="pass" placeholder="Enter your Password"> <br> <br>
    Retype Password: <br>
    <input type="password" name="repass" placeholder="Retype your Password"> <br> <br>
    <input type="submit" name="submit" value="SUBMIT"> 

</form>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        //  $validEmail= 0;
        // $validpass= 0;   

        if($name == null && $email == null && $pass == null && $repass == null){
            echo "Please fill up the form ";
        }

        else{
            if ($email== null){
                echo " Enater Youre email";

            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo " Please enter Valid email";

            }
            // else {
            //     $validEmail= 1;
            // }

            // if(pass== null){
            //     echo "Please Enter Your Password";
            // }
            else if(strlen($pass)>=8 && strlen($pass)<=4){
                echo "Enter Password between 4 to 8 character";
            }
            
            if($pass !=$repass){
                echo "Password Are not Match";
            }
            else{
                echo "Registration are successfully Done";
            }
        }
    }

?>