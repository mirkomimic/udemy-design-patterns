<?php

namespace App\Behavioral\Memento;

class Originator
{
  private $state;

  public function setState($value)
  {
    $this->state = $value;
  }

  public function getState()
  {
    return $this->state;
  }

  public function createMemento()
  {
    return new Memento($this->state);
  }

  public function setMemento(Memento $memento)
  {
    $this->state = $memento->getState();
  }
}
