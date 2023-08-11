<?php

namespace App\Structural\Bridge;

class RefinedAbstraction1 extends Abstraction
{
  public function __construct()
  {
    $this->impl = new ConcreteImplementor1();
  }

  public function operation()
  {
    return $this->impl->operation();
  }
}
