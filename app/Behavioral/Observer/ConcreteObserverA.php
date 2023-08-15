<?php

namespace App\Behavioral\Observer;

class ConcreteObserverA extends Observer
{
  private $state;
  private $conSub;

  public function __construct(ConcreteSubject $obj)
  {
    $this->conSub = $obj;
    $this->conSub->attach($this);
  }

  public function update()
  {
    $this->state = $this->conSub->getState();
  }

  public function getState()
  {
    return $this->state;
  }
}
