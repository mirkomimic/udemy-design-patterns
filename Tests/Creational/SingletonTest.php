<?php

declare(strict_types=1);

use App\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
  public function testCanCreateSingletonInstance()
  {
    Singleton::instance()->setData(10);
    $this->assertSame(10, Singleton::instance()->getData());
  }
}
