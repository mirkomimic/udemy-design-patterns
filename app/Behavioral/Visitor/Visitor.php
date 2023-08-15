<?php

namespace App\Behavioral\Visitor;

abstract class Visitor
{
  public abstract function visitConcreteElementA(ConcreteElementA $elem);
  public abstract function visitConcreteElementB(ConcreteElementB $elem);
}
