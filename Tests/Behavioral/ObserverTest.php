<?php

declare(strict_types=1);

use App\Behavioral\Observer\ConcreteObserverA;
use App\Behavioral\Observer\ConcreteObserverB;
use App\Behavioral\Observer\ConcreteSubject;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
  public function testObserver()
  {
    $conSubObj = new ConcreteSubject();
    $obsObj1 = new ConcreteObserverA($conSubObj);
    $obsObj2 = new ConcreteObserverB($conSubObj);
    $conSubObj->setState(1);

    $this->assertEquals(1, $obsObj1->getState());
    $this->assertEquals(1, $obsObj2->getState());
  }
}
