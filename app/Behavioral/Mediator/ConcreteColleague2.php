<?php

namespace App\Behavioral\Mediator;

class ConcreteColleague2 extends Colleague
{
  public function __construct(Mediator $obj)
  {
    parent::__construct($obj);
  }

  public function sendMessage($message)
  {
    return $this->mediator->sendMessage($message, $this);
  }

  public function receiveMessage($message)
  {
    return "ConcreteColleague2::receiveMessage()..Message = " . $message;
  }
}
