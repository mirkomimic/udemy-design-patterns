<?php

namespace App\Structural\Proxy;

class Proxy extends Subject
{
  private $realSubObj;

  public function __construct()
  {
    $this->realSubObj = null;
  }

  public function performOperation()
  {
    if ($this->realSubObj == null)
      $this->realSubObj = new RealSubject();

    return $this->realSubObj->performOperation();
  }
}
