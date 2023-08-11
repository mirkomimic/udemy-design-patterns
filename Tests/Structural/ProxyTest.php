<?php

declare(strict_types=1);

use App\Structural\Proxy\Proxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
  public function testCanProxy()
  {
    $obj = new Proxy();
    $this->assertSame("RealSubject::performOperation()", $obj->performOperation());
  }
}
