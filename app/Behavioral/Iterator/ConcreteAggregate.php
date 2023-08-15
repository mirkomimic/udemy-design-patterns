<?php

namespace App\Behavioral\Iterator;

class ConcreteAggregate extends Aggregate
{
  private $elements = [];

  public function createIterator()
  {
    return new ConcreteIterator($this);
  }

  public function size()
  {
    return count($this->elements);
  }

  public function add($value)
  {
    array_push($this->elements, $value);
  }

  public function getElement($index)
  {
    return $this->elements[$index];
  }

  public function getElements()
  {
    return $this->elements;
  }
}
