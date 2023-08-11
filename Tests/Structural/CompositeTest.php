<?php

declare(strict_types=1);

use App\Structural\Composite\Composite;
use App\Structural\Composite\Leaf;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
  public function testCanAddComponents()
  {
    $root = new Composite();
    $root->add(new Leaf('Leaf A'));

    $comp = new Composite();
    $comp->add(new Leaf("Leaf B"));

    $root->add($comp);
    $root->add(new Leaf("Leaf C"));

    $this->assertCount(3, $root->getElements());
  }
}
