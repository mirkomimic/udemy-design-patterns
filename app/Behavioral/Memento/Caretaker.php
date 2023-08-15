<?php

namespace App\Behavioral\Memento;

class Caretaker
{
  private $memento;
  private $origin;

  public function __construct(Originator $obj)
  {
    $this->origin = $obj;
  }

  public function execute()
  {
    $this->memento = $this->origin->createMemento();
    $this->origin->setState(0);
  }

  public function unexecute()
  {
    $this->origin->setMemento($this->memento);
  }
}
