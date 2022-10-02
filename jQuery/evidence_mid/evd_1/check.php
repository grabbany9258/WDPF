<?php
 $db = new mysqli('localhost','root', '', 'wdpf51');
$email =  $_POST['em'];
$pass =  md5($_POST['password']);

$sql = "SELECT * FROM USERS WHERE email = '$email' AND password = '$pass'";
$result = $db->query($sql);
if($result->num_rows>0){
    echo "<span class='green'>Succesfully logged in!</span>";
    
}
else{
    
    echo "<span class='red'>Invalid username & password!</span>";
}



?>