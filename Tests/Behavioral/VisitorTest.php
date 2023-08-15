<?php

declare(strict_types=1);

use App\Behavioral\Visitor\ConcreteElementA;
use App\Behavioral\Visitor\ConcreteElementB;
use App\Behavioral\Visitor\ConcreteVisitor1;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
  public function testVisitor()
  {
    $elemA = new ConcreteElementA();
    $elemB = new ConcreteElementB();

    $visitor1 = new ConcreteVisitor1();

    $this->assertSame("ConcreteVisitor1::visitConcreteElementA()", $elemA->accept($visitor1));
    $this->assertSame("ConcreteVisitor1::visitConcreteElementB()", $elemB->accept($visitor1));
  }
}
