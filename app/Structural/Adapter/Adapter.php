<?php

namespace App\Structural\Adapter;

class Adapter extends Target
{
  private $adaptee;

  public function __construct()
  {
    $this->adaptee = new Adaptee();
  }

  public function request()
  {
    return $this->adaptee->specificRequest();
  }
}
