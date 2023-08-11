<?php

namespace App\Structural\Composite;

class Leaf extends Component
{
  private $value;

  public function __construct($name)
  {
    $this->value = $name;
  }

  public function operation()
  {
    return "Value = " . $this->value;
  }
}
