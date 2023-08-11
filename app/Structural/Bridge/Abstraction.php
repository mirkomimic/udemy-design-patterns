<?php

namespace App\Structural\Bridge;

abstract class Abstraction
{
  public $impl;
  abstract public function operation();
}
