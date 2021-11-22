<?php
class Selff {
  public static function hi() {
    echo "Hello there!";
  }

  public function __construct() {
    self::hi();
  }
}

new Selff();
?> 