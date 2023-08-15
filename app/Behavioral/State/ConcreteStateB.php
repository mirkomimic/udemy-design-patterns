<?php

namespace App\Behavioral\State;

class ConcreteStateB extends State
{
  public function handle(Context $context)
  {
    $context->setState(new ConcreteStateA());
  }
}
