<?php

namespace App\Structural\Flyweight;

class FlyweightFactory
{
  private $flyweightPool = [];

  public function getFlyweight($key)
  {
    if (array_key_exists($key, $this->flyweightPool)) {
      return $this->flyweightPool[$key];
    } else {
      $obj = new ConcreteFlyweight($key);
      $this->flyweightPool[$key] = $obj;
      return $obj;
    }
  }

  public function getFlyweightPool()
  {
    return $this->flyweightPool;
  }
}
