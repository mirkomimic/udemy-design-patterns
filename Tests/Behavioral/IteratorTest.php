<?php

declare(strict_types=1);

use App\Behavioral\Iterator\ConcreteAggregate;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
  public function testIterator()
  {
    $obj = new ConcreteAggregate();
    $obj->add("aaa");
    $obj->add("bbb");

    $itr = $obj->createIterator();

    for ($itr->first(); !$itr->isDone(); $itr->next())
      echo $itr->currentItem();

    $this->assertContains('aaa', $obj->getElements());
  }
}
