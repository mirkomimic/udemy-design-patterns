<?php

namespace App\Behavioral\ChainOfResponsibility;

class ConcreteHandler1 extends Handler
{
  public function handle($requestNo)
  {
    if ($requestNo < 5) {
      return "ConcreteHandler1 Handled Request Number: " . $requestNo;
    } else if ($this->successor != null) {
      return $this->successor->handle($requestNo);
    }
  }
}
