<?php

declare(strict_types=1);

use App\Behavioral\Template\ConcreteClassA;
use App\Behavioral\Template\ConcreteClassB;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
  public function testTemplate()
  {
    $obj = new ConcreteClassA();
    $this->assertSame("Inside ConcreteClassA::primitiveOperation1()Inside ConcreteClassA::primitiveOperation2()", $obj->templateMethod());

    $obj = new ConcreteClassB();
    $this->assertSame("Inside ConcreteClassB::primitiveOperation1()Inside ConcreteClassB::primitiveOperation2()", $obj->templateMethod());
  }
}
