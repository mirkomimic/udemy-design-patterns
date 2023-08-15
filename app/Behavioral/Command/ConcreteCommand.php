<?php

namespace App\Behavioral\Command;

class ConcreteCommand extends Command
{
  private $receiver;

  public function __construct(Receiver $obj)
  {
    $this->receiver = $obj;
  }

  public function execute()
  {
    return $this->receiver->action();
  }
}
