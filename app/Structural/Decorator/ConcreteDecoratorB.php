<?php

namespace App\Structural\Decorator;

class ConcreteDecoratorB extends Decorator
{
  private $addedState;

  public function __construct(Component $obj)
  {
    parent::__construct($obj);
  }

  public function operation()
  {
    parent::operation();
    $this->addedBehavior();
  }

  private function addedBehavior()
  {
    return "ConcreteDecoratorB::addedBehavior()";
  }
}
