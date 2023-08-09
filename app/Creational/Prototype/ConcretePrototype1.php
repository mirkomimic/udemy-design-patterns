<?php

namespace App\Creational\Prototype;

class ConcretePrototype1 extends Prototype
{
  public function __clone()
  {
    // clone data item
  }

  public function usePrototype()
  {
    echo "Inside ConcretePrototype1::usePrototype()";
  }
}
