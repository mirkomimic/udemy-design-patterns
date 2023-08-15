<?php

namespace App\Behavioral\Interpreter;

class Context
{
  private $expression;

  public function __construct($value)
  {
    $this->expression = $value;
  }

  public function setExpression($value)
  {
    $this->expression = $value;
  }

  public function getExpression()
  {
    return $this->expression;
  }
}
