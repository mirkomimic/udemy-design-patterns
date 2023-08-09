<?php

declare(strict_types=1);

use App\Creational\Builder\ConcreteBuilder1;
use App\Creational\Builder\ConcreteBuilder2;
use App\Creational\Builder\Director;
use App\Creational\Builder\Product1;
use App\Creational\Builder\Product2;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
  public function testCanBuildProduct1()
  {
    $director = new Director();
    $builder1 = new ConcreteBuilder1();
    $director->setBuilder($builder1);
    $director->construct("Product1");

    $this->assertInstanceOf(Product1::class, $builder1->getProduct());
  }

  public function testCanBuildProduct2()
  {
    $director = new Director();
    $builder2 = new ConcreteBuilder2();
    $director->setBuilder($builder2);
    $director->construct("Product2");

    $this->assertInstanceOf(Product2::class, $builder2->getProduct());
  }
}
