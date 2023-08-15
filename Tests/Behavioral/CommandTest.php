<?php

declare(strict_types=1);

use App\Behavioral\Command\ConcreteCommand;
use App\Behavioral\Command\Invoker;
use App\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
  public function testCommand()
  {
    $receiver = new Receiver();
    $cmd = new ConcreteCommand($receiver);
    $invoker = new Invoker($cmd);

    $this->assertSame("Inside Receiver::action()", $invoker->executeCmd());
  }
}
