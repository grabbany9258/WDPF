<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }

  function __construct2($name, $color) {
    $this->color = $color; 
    $this->name = $name; 
  }
//   function get_name() {
//     return $this->name;
//   }
}

$apple = new Fruit("Apple");
$apple = new Fruit("Apple","color");
print_r ($apple);
// echo $apple->get_name();
?>
 
</body>
</html>
