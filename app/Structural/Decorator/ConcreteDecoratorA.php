<?php

namespace App\Structural\Decorator;

class ConcreteDecoratorA extends Decorator
{
  private $addedState;

  public function __construct(Component $obj)
  {
    parent::__construct($obj);
    $this->addedState = 0;
  }

  public function operation()
  {
    parent::operation();
    $this->addedState = 1;
  }
}
