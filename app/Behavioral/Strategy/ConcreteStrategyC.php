<?php

namespace App\Behavioral\Strategy;

class ConcreteStrategyC extends Strategy
{
  public function algorithmInterface()
  {
    return "Inside ConcreteStrategyC::algorithmInterface()";
  }
}
