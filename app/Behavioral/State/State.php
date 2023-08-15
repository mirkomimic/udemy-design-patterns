<?php

namespace App\Behavioral\State;

abstract class State
{
  public abstract function handle(Context $context);
}
