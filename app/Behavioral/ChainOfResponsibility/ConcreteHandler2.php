<?php

namespace App\Behavioral\ChainOfResponsibility;

class ConcreteHandler2 extends Handler
{
  public function handle($requestNo)
  {
    if ($requestNo < 10) {
      return "ConcreteHandler2 Handled Request Number: " . $requestNo;
    } else if ($this->successor != null) {
      return $this->successor->handle($requestNo);
    }
  }
}
