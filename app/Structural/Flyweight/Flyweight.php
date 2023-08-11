<?php

namespace App\Structural\Flyweight;

abstract class Flyweight
{
  public abstract function operation($extrinsicState);
}
