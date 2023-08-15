<?php

namespace App\Behavioral\Visitor;

class ConcreteElementA extends Element
{
  public function accept(Visitor $v)
  {
    return $v->visitConcreteElementA($this);
  }
}
