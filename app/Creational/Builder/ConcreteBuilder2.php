<?php

namespace App\Creational\Builder;

class ConcreteBuilder2 extends Builder
{
  private $product;

  public function create()
  {
    $this->product = new Product2();
  }

  public function buildPartA()
  {
  }
  public function buildPartB()
  {
  }
  public function buildPartC()
  {
  }
  public function buildPartD()
  {
  }

  public function getProduct()
  {
    return $this->product;
  }
}
