<?php

namespace App\Creational\AbstractFactory;

class ConcreteFactory2 extends AbstractFactory
{
  public function createProduct1()
  {
    return new Product2_1();
  }

  public function createProduct2()
  {
    return new Product2_2();
  }
}
