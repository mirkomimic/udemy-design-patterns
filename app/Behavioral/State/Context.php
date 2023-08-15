<?php

namespace App\Behavioral\State;

class Context
{
  private $state;

  public function __construct(State $obj)
  {
    $this->state = $obj;
  }

  public function setState(State $value)
  {
    $this->state = $value;
  }

  public function getState()
  {
    return $this->state;
  }

  public function request()
  {
    $this->state->handle($this);
  }
}
