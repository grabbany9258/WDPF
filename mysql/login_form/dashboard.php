<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location:grb.php');
    }
?>

<h1>Welcome to dashboard</h1>

<?php
    echo "Logged in by users" . $_SESSION['email'];

?>

<a href="logout.php">logout</a>