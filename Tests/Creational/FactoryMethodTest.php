<?php

declare(strict_types=1);

use App\Creational\FactoryMethod\ConcreteCreator;
use App\Creational\FactoryMethod\ConcreteProduct;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
  public function testCanCreateProduct()
  {
    $prodCreator = new ConcreteCreator();
    $this->assertInstanceOf(ConcreteProduct::class, $prodCreator->anOperation());
  }
}
