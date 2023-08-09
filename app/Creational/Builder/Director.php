<?php

namespace App\Creational\Builder;

class Director
{
  private $builder;

  public function setBuilder(Builder $obj)
  {
    $this->builder = $obj;
  }

  public function construct($name)
  {
    if ($name == "Product1") {
      $this->builder->create();
      $this->builder->buildPartA();
      $this->builder->buildPartB();
    } else if ($name == "Product2") {
      $this->builder->create();
      $this->builder->buildPartC();
      $this->builder->buildPartD();
    }
  }
}
