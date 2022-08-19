<?php
$line = "vim is the greatest word processor ever created! oh vim how can i forget you";

echo preg_match("/\bvim\b/i", $line, $matches);

print_r($matches);

?>
<hr>
<?php
$line = "Vim is the greatest word processor ever created! oh vim how can i forget you";

echo preg_match_all("/\bvim\b/i", $line, $matches);

print_r($matches);

?>

<hr>

<?php
$line = "Vims is the greatest word processor ever created! oh vim how can i forget you";

echo preg_match_all("/vim/i", $line, $matches); // boundary nai so vims keo pacce..

print_r($matches);

?>

<hr>

<?php
$userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
echo "<pre>";
print_r($pat_array);
?>

