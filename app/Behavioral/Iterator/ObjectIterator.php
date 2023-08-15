<?php

namespace App\Behavioral\Iterator;

abstract class ObjectIterator
{
  public abstract function first();
  public abstract function next();
  public abstract function isDone();
  public abstract function currentItem();
}
