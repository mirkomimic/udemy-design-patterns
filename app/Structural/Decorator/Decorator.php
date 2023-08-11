<?php

namespace App\Structural\Decorator;

class Decorator extends Component
{
  private $comp;

  public function __construct(Component $obj)
  {
    $this->comp = $obj;
  }

  public function operation()
  {
    return $this->comp->operation();
  }
}
