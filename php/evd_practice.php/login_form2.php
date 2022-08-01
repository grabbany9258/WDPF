<h1>Login Form</h1>
<form action="" method="Post">

    <input type="text" name="login" palaceholder="Enter your user name" value=" <?php if(isset($_POST['login'])) echo $_POST['login']  ?>"> <br>
    <input type="text" name="email" palaceholder="Enter your email address" value=" <?php if(isset($_POST['email'])) echo $_POST['email']  ?>"> <br>
    <input type="submit" name="submit" value="CHECK">

    value="<?php if(isset($_POST['login'])) echo $_POST['login'] ?>">

</form>



<?php
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $email = $_POST['email'];
        $validLogin = 0;
        $validEmail = 0;

        
        if ($login== null && $email== null){
            echo "Please put Username and Email <br>";
            
             return;
        }


        
        
    //     else if($login==null){
    //         echo "Please put username. <br>";

    //     }
    //     else if(strlen($login)>8 || strlen($login)<4){
    //         echo "Must put username between 4 to 8 letter <br>";
    //     }

    //     else{
    //         $validLogin=1;
    //     }

    //     if($email==null){
    //         echo "Enter valid email";
    //     }
    //     else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo "Must put valid email";
    //     }
    //     else{
    //         $validEmail = 1;
    //     }
    //     if($validLogin ==1 && $validEmail==1){
    //         echo "Logged in SUccesfull";
    //     }


     }



?>