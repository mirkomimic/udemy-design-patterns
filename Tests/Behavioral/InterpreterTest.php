<?php

declare(strict_types=1);

use App\Behavioral\Interpreter\Context;
use App\Behavioral\Interpreter\TerminalExpression;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
  public function testInterpreter()
  {
    $contextObj = new Context('test');
    $terminalExpression = new TerminalExpression();

    $this->assertSame("Inside TerminalExpression::interpret()test", $terminalExpression->interpret($contextObj));
  }
}
