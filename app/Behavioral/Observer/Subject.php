<?php

namespace App\Behavioral\Observer;

class Subject
{
  private $observers = [];

  public function attach(Observer $obj)
  {
    array_push($this->observers, $obj);
  }

  public function detach(Observer $obj)
  {
  }

  public function notify()
  {
    for ($i = 0; $i < count($this->observers); $i++) {
      $this->observers[$i]->update();
    }
  }
}
