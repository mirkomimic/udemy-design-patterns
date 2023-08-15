<?php

namespace App\Behavioral\Strategy;

class Context
{
  private $strategy;

  public function setStrategy(Strategy $value)
  {
    $this->strategy = $value;
  }

  public function getStrategy()
  {
    return $this->strategy;
  }

  public function contextInterface()
  {
    return $this->strategy->algorithmInterface();
  }
}
