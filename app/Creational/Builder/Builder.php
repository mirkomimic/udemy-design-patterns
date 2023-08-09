<?php

namespace App\Creational\Builder;

abstract class Builder
{
  public abstract function create();
  public abstract function buildPartA();
  public abstract function buildPartB();
  public abstract function buildPartC();
  public abstract function buildPartD();
}
