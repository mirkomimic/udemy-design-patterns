<?php

namespace App\Behavioral\Memento;

class Memento
{
  private $state;

  public function __construct($value)
  {
    $this->state = $value;
  }

  public function setState($value)
  {
    $this->state = $value;
  }

  public function getState()
  {
    return $this->state;
  }
}
