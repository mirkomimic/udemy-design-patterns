<?php

namespace App\Behavioral\Command;

class Invoker
{
  private $cmd;

  public function __construct(Command $obj)
  {
    $this->cmd = $obj;
  }

  public function executeCmd()
  {
    return $this->cmd->execute();
  }
}
