<?php
// Singleton class
class Ford
{
  public $founder = "Henry Ford";
  public $headquarters = "Detroit";
  public $employees = 164000;

  public function produces($car)
  {
    return $car->producer == $this;
  }

  private static $instance;

  // Private constructor
  private function __construct()
  {
    // do nothing
  }

  // Private clone
  private function __clone()
  {
    // do nothing
  }

  public function instance()
  {
    if (!isset(self::$instance)){
      self::$instance = new self();
    }

    return self::$instance;
  }
}
?>
