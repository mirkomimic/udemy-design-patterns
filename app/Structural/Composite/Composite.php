<?php

namespace App\Structural\Composite;

class Composite extends Component
{
  private $elements = [];

  public function operation()
  {
    for ($i = 0; $i < count($this->elements); $i++) {
      $this->elements[$i]->operation();
    }
  }

  public function add(Component $obj)
  {
    array_push($this->elements, $obj);
  }

  public function getElements()
  {
    return $this->elements;
  }
}
