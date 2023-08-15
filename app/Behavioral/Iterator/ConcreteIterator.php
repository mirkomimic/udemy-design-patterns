<?php

namespace App\Behavioral\Iterator;

class ConcreteIterator extends ObjectIterator
{
  private $aggregateObj;
  private $currentElement;

  public function __construct(ConcreteAggregate $obj)
  {
    $this->aggregateObj = $obj;
    $this->currentElement = 0;
  }

  public function first()
  {
    $this->currentElement = 0;
  }

  public function next()
  {
    $this->currentElement++;
  }

  public function isDone()
  {
    if ($this->currentElement >= $this->aggregateObj->size()) {
      return true;
    } else {
      return false;
    }
  }

  public function currentItem()
  {
    return $this->aggregateObj->getElement($this->currentElement);
  }
}
