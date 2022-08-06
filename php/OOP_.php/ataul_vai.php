<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $weight;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  
  function set_color($color) {
    $this->color = $color;
  }

  function set_weight($weight){
    $this->weight = $weight;
  }
  
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$apple->weight='1KG';

$banana->set_name('Banana');
$banana->set_color('Yellow');
echo '<pre>';
print_r($apple);
print_r($banana);
echo '</pre>';



echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
 
</body>
</html>
