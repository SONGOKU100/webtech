<?php
class Dog {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "This is {$this->name} and it's hair color is {$this->color}.";
  }
}

// Doge is inherited from Dog
class Doge extends Dog {
  public function message() {
    echo "Doge will bonk you. <br>";
  }
}
$doge = new Doge("Doge", "Golden");
$doge->message();
$doge->intro();
?>
