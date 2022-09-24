<?php 
// include('dbconfig.php');

$db = new mysqli("localhost", "root", "", "wdpf51");
// echo =  $_GET['email'];
$email =  $_REQUEST['email'];
//  echo "<br>";
// echo $_GET['pass'];
$pass =  $_REQUEST['pass'];

$pass = md5($pass);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
$result =$db->query($sql);

if($result->num_rows==1){
     
     echo "<span class='green'>Valid User</span>";
}
else{
   
    echo "<span class='red'>Invalid User</span>";
}


?>