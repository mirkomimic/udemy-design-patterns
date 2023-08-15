<?php

namespace App\Behavioral\Visitor;

abstract class Element
{
  public abstract function accept(Visitor $v);
}
