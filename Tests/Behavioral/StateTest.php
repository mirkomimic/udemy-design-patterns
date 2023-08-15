<?php

declare(strict_types=1);

use App\Behavioral\State\Context;
use App\Behavioral\State\ConcreteStateA;
use App\Behavioral\State\ConcreteStateB;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
  public function testState()
  {
    $state = new ConcreteStateA();
    $context = new Context($state);

    $context->request();
    $this->assertInstanceOf(ConcreteStateB::class, $context->getState());

    $context->request();
    $this->assertInstanceOf(ConcreteStateA::class, $context->getState());
  }
}
