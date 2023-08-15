<?php

namespace App\Behavioral\Visitor;

class ConcreteElementB extends Element
{
  public function accept(Visitor $v)
  {
    return $v->visitConcreteElementB($this);
  }
}
