<?php

namespace App\Structural\Flyweight;

class ConcreteFlyweight extends Flyweight
{
  private $intrinsicState;

  public function __construct($key)
  {
    if ($key == 'flyweight1')
      $this->intrinsicState = 101;
    else if ($key == 'flyweight2')
      $this->intrinsicState = 102;
    else if ($key == 'flyweight3')
      $this->intrinsicState = 103;
  }

  public function operation($extrinsicState)
  {
    return "Intrinsic State = " . $this->intrinsicState . ", Extrinsic State = " . $extrinsicState;
  }
}
