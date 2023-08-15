<?php

namespace App\Behavioral\Interpreter;

class NonTerminalExpression extends AbstractExpression
{
  public function interpret(Context $context)
  {
    return "Inside NonTerminalExpression::interpret()";
  }
}
