<?php
 $db = new mysqli('localhost','root', '', 'wdpf51');
$email =  $_POST['em'];
$pass =  md5($_POST['password']);

$sql = "SELECT * FROM USERS WHERE email = '$email' AND password = '$pass'";
$result = $db->query($sql);
if($result->num_rows>0){
    echo "<h2 class='green'>Succesfully logged in!</h2>";
    
}
else{
    
    echo "<h2 class='red'>Invalid username & password!</h2>";
}



?>