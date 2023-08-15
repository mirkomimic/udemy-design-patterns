<?php

namespace App\Behavioral\Visitor;

class ConcreteVisitor2 extends Visitor
{
  public function visitConcreteElementA(ConcreteElementA $elem)
  {
    return "ConcreteVisitor2::visitConcreteElementA()";
  }

  public function visitConcreteElementB(ConcreteElementB $elem)
  {
    return "ConcreteVisitor2::visitConcreteElementB()";
  }
}
