<?php

namespace App\Behavioral\ChainOfResponsibility;

abstract class Handler
{
  public $successor;

  public function __construct()
  {
    $this->successor = null;
  }

  public abstract function handle($requestNo);

  public function makeSuccessor(Handler $obj)
  {
    $this->successor = $obj;
  }
}
