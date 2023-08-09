<?php

namespace App\Creational\FactoryMethod;

class ConcreteProduct extends Product
{
  public function useProduct()
  {
    echo "Inside ConcreteProduct:useProduct()";
  }
}
