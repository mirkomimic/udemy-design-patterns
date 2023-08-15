<?php

namespace App\Behavioral\Interpreter;

abstract class AbstractExpression
{
  public abstract function interpret(Context $context);
}
