<?php

namespace App\Behavioral\Mediator;

abstract class Mediator
{
  public abstract function sendMessage($message, Colleague $obj);
}
