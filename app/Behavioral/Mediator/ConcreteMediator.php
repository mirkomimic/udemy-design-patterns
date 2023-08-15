<?php

namespace App\Behavioral\Mediator;

class ConcreteMediator extends Mediator
{
  private $colleague1;
  private $colleague2;

  public function setColleagues(ConcreteColleague1 $obj1, ConcreteColleague2 $obj2)
  {
    $this->colleague1 = $obj1;
    $this->colleague2 = $obj2;
  }

  public function sendMessage($message, Colleague $obj)
  {
    if ($obj == $this->colleague1)
      return $this->colleague2->receiveMessage($message);
    else if ($obj == $this->colleague2)
      return $this->colleague1->receiveMessage($message);
  }
}
