<?php

declare(strict_types=1);

use App\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
  public function testFlyweight()
  {
    $flyweightFactory = new FlyweightFactory();

    $flyweightFactory->getFlyweight('flyweight1');
    $flyweightFactory->getFlyweight('flyweight2');
    $flyweightFactory->getFlyweight('flyweight1');

    $this->assertCount(2, $flyweightFactory->getFlyweightPool());
  }
}
