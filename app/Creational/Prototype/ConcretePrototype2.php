<?php

namespace App\Creational\Prototype;

class ConcretePrototype2 extends Prototype
{
  public function __clone()
  {
    // clone data item
  }

  public function usePrototype()
  {
    echo "Inside ConcretePrototype2::usePrototype()";
  }
}
