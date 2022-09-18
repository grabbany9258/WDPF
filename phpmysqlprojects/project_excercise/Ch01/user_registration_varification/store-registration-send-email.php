<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
include "db.php";

$to = $_POST['email'];
$result = mysqli_query($conn,"SELECT * FROM users1 WHERE email='" . $_POST['email'] . "'");
$row= mysqli_num_rows($result);
if($row < 1)
{
$token = md5($_POST['email']).rand(10,9999);
mysqli_query($conn, "INSERT INTO users1(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
$link = "<a href='https://szhabib.idbdev.com/registration_confirmation/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";

$subject =  "Registration confirmation";

$send = mail($to, $subject, $link);
}

if($send)
{
echo "Check Your Email box and Click on the email verification link.";
}
else
{
echo "Problem";
}
}
?>