<?php

declare(strict_types=1);
// php ./vendor/bin/phpunit --testdox

use App\Creational\AbstractFactory\ConcreteFactory1;
use App\Creational\AbstractFactory\ConcreteFactory2;
use App\Creational\AbstractFactory\Product1_1;
use App\Creational\AbstractFactory\Product1_2;
use App\Creational\AbstractFactory\Product2_1;
use App\Creational\AbstractFactory\Product2_2;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
  public function testCanCreateProducts1()
  {
    $factory1 =  new ConcreteFactory1();
    $this->assertInstanceOf(Product1_1::class, $factory1->createProduct1());
    $this->assertInstanceOf(Product1_2::class, $factory1->createProduct2());
  }
  public function testCanCreateProducts2()
  {
    $factory2 =  new ConcreteFactory2();
    $this->assertInstanceOf(Product2_1::class, $factory2->createProduct1());
    $this->assertInstanceOf(Product2_2::class, $factory2->createProduct2());
  }
}
