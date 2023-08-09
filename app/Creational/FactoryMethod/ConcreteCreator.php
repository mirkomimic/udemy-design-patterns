<?php

namespace App\Creational\FactoryMethod;

class ConcreteCreator extends Creator
{
  public function factoryMethod()
  {
    return new ConcreteProduct();
  }
}
