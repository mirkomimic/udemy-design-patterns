<?php

namespace App\Behavioral\Observer;

class ConcreteSubject extends Subject
{
  private $state;

  public function setState($value)
  {
    $this->state = $value;
    $this->notify();
  }

  public function getState()
  {
    return $this->state;
  }
}
