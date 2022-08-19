
<h1>$_SERVER super global</h1>

<?php
    echo "<pre>";
    print_r($_SERVER);

    echo "<br>";

    echo $_SERVER['PHP_SELF'];

    echo "<br>";

    echo $_SERVER['REMOTE_ADDR'];

    echo "<br>";


    echo $_SERVER['REQUEST_URI'];

?>

<h1>$_GET superglobal</h1>

<a href="super_global.php?name=rabbany&phone=01533308717&age=22">CLick here</a>



<?php


echo $_GET['name'];
echo "<br>";

echo $_GET['age'];
echo "<br>";
echo $_GET['phone'];

$_GET['today'] = "Monday";

print_r($_GET);
?>