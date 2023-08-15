<?php

namespace App\Behavioral\Strategy;

class ConcreteStrategyB extends Strategy
{
  public function algorithmInterface()
  {
    return "Inside ConcreteStrategyB::algorithmInterface()";
  }
}
