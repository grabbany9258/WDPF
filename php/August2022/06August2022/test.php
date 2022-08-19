<?php
$cars=array("Volvo"=>array("XC60","XC90"),"BMW"=>array("X3","X5"),"Toyota"=>array("Highlander")); 

echo "Normal count: " . count($cars)."<br>";
echo "Recursive count: " . count($cars,1);
?>
 <hr>
<?php    

$students= array ("Tokey", "Zobaed", array ("Aklima", "Sultana"),   "Hasan"); 
echo "<pre>";  
print_r($students); 

echo "Normal count: " . count($students)."<br>";  
echo "Normal count: " . count($students, 1)."<br>"; 
?>
<hr>

<?php    
// $text = "this is\tsome text that\nwe might like to parse.";    
// print_r(split("[\n\t]",$text));    
?>

<hr>

<?php
$size =$_FILES['size'];
print_r($size);

?>

