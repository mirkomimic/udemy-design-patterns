<?php

namespace App\Creational\FactoryMethod;

abstract class Creator
{
  private $product;
  public abstract function factoryMethod();

  public function anOperation()
  {
    $product = $this->factoryMethod();
    return $product;
  }
}
