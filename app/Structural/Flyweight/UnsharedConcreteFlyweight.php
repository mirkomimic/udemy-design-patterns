<?php

namespace App\Structural\Flyweight;

class UnsharedConcreteFlyweight extends Flyweight
{
  private $allState;

  public function __construct($value)
  {
    $this->allState = $value;
  }

  public function operation($extrinsicState)
  {
    return "All State = " . $this->allState . ", Extrinsic State = " . $extrinsicState;
  }
}
