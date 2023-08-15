<?php

declare(strict_types=1);

use App\Behavioral\ChainOfResponsibility\ConcreteHandler1;
use App\Behavioral\ChainOfResponsibility\ConcreteHandler2;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
  public function testCanChainResponsibility()
  {
    $handle1 = new ConcreteHandler1();
    $handle2 = new ConcreteHandler2();

    $handle1->makeSuccessor($handle2);
    $this->assertSame("ConcreteHandler1 Handled Request Number: 4", $handle1->handle(4));

    $this->assertSame("ConcreteHandler2 Handled Request Number: 6", $handle1->handle(6));
  }
}
