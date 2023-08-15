<?php

namespace App\Behavioral\State;

class ConcreteStateA extends State
{
  public function handle(Context $context)
  {
    $context->setState(new ConcreteStateB());
  }
}
