<?php

namespace App\Behavioral\Mediator;

abstract class Colleague
{
  public $mediator;

  public function __construct(Mediator $obj)
  {
    $this->mediator = $obj;
  }

  public abstract function sendMessage($message);
  public abstract function receiveMessage($message);
}
