<?php

declare(strict_types=1);

use App\Creational\Prototype\ConcretePrototype1;
use App\Creational\Prototype\ConcretePrototype2;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
  public function testCanCloneObj()
  {
    $cp1ProtoObj = new ConcretePrototype1();
    $cp2ProtoObj = new ConcretePrototype2();

    $cpObj = clone $cp1ProtoObj;
    $this->assertInstanceOf(ConcretePrototype1::class, $cpObj);

    $cpObj = clone $cp2ProtoObj;
    $this->assertInstanceOf(ConcretePrototype2::class, $cpObj);
  }
}
