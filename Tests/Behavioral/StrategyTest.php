<?php

declare(strict_types=1);

use App\Behavioral\Strategy\ConcreteStrategyA;
use App\Behavioral\Strategy\ConcreteStrategyB;
use App\Behavioral\Strategy\ConcreteStrategyC;
use App\Behavioral\Strategy\Context;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
  public function testStrategy()
  {
    $context = new Context();

    $conStratA = new ConcreteStrategyA();
    $context->setStrategy($conStratA);
    $this->assertSame("Inside ConcreteStrategyA::algorithmInterface()", $context->contextInterface());

    $conStratB = new ConcreteStrategyB();
    $context->setStrategy($conStratB);
    $this->assertSame("Inside ConcreteStrategyB::algorithmInterface()", $context->contextInterface());

    $conStratC = new ConcreteStrategyC();
    $context->setStrategy($conStratC);
    $this->assertSame("Inside ConcreteStrategyC::algorithmInterface()", $context->contextInterface());
  }
}
