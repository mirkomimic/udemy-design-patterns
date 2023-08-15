<?php

declare(strict_types=1);

use App\Behavioral\Mediator\ConcreteColleague1;
use App\Behavioral\Mediator\ConcreteColleague2;
use App\Behavioral\Mediator\ConcreteMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
  public function testMediator()
  {
    $m = new ConcreteMediator();

    $c1 = new ConcreteColleague1($m);
    $c2 = new ConcreteColleague2($m);

    $m->setColleagues($c1, $c2);

    $this->assertSame("ConcreteColleague2::receiveMessage()..Message = Hello", $c1->sendMessage("Hello"));
    $this->assertSame("ConcreteColleague1::receiveMessage()..Message = Hello", $c2->sendMessage("Hello"));
  }
}
