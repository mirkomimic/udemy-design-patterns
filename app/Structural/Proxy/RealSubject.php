<?php

namespace App\Structural\Proxy;

class RealSubject extends Subject
{
  public function performOperation()
  {
    return "RealSubject::performOperation()";
  }
}
