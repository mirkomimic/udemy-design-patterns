<?php

namespace App\Structural\Bridge;

class RefinedAbstraction2 extends Abstraction
{
  public function __construct()
  {
    $this->impl = new ConcreteImplementor2();
  }

  public function operation()
  {
    return $this->impl->operation();
  }
}
