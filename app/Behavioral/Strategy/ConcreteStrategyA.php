<?php

namespace App\Behavioral\Strategy;

class ConcreteStrategyA extends Strategy
{
  public function algorithmInterface()
  {
    return "Inside ConcreteStrategyA::algorithmInterface()";
  }
}
