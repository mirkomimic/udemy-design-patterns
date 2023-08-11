<?php

declare(strict_types=1);

use App\Structural\Bridge\RefinedAbstraction1;
use App\Structural\Bridge\RefinedAbstraction2;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
  public function testCanBridgeMethod()
  {
    $absObj = new RefinedAbstraction1();
    $this->assertSame("Inside ConcreteImplementor1::operation()", $absObj->operation());

    $absObj = new RefinedAbstraction2();
    $this->assertSame("Inside ConcreteImplementor2::operation()", $absObj->operation());
  }
}
