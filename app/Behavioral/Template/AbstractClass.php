<?php

namespace App\Behavioral\Template;

abstract class AbstractClass
{
  public function templateMethod()
  {
    return $this->primitiveOperation1() . $this->primitiveOperation2();;
  }

  public abstract function primitiveOperation1();
  public abstract function primitiveOperation2();
}
