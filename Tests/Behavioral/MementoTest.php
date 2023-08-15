<?php

declare(strict_types=1);

use App\Behavioral\Memento\Caretaker;
use App\Behavioral\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
  public function testMemento()
  {
    $originator = new Originator();
    $originator->setState(1);
    $this->assertEquals(1, $originator->getState());

    $caretaker = new Caretaker($originator);
    $caretaker->execute();
    $this->assertEquals(0, $originator->getState());

    $caretaker->unexecute();
    $this->assertEquals(1, $originator->getState());
  }
}
