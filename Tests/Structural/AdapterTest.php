<?php

declare(strict_types=1);

use App\Structural\Adapter\Adapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
  public function testCanCallAdapteeMethod()
  {
    $target = new Adapter();
    $this->assertSame("Inside Adaptee::specificRequest()", $target->request());
  }
}
