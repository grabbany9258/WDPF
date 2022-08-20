<?php
// Initiate session and create a few session variables
session_start();
// Set a few session variables.
$_SESSION['user'] = "Rabbany";
$_SESSION['log_on'] = date("M d Y H:i:s");
// Encode all session data into a single string and return the result
//session_destroy(); // akbar session destry korle sob data muse jay and then abar encode korte hbe 

$Vars = session_encode();
echo $Vars;
?>