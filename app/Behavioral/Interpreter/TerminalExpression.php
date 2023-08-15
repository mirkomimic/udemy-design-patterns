<?php

namespace App\Behavioral\Interpreter;

class TerminalExpression extends AbstractExpression
{
  public function interpret(Context $context)
  {
    return "Inside TerminalExpression::interpret()" . $context->getExpression();
  }
}
