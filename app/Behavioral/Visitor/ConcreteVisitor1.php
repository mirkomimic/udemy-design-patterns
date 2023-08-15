<?php

namespace App\Behavioral\Visitor;

class ConcreteVisitor1 extends Visitor
{
  public function visitConcreteElementA(ConcreteElementA $elem)
  {
    return "ConcreteVisitor1::visitConcreteElementA()";
  }

  public function visitConcreteElementB(ConcreteElementB $elem)
  {
    return "ConcreteVisitor1::visitConcreteElementB()";
  }
}
