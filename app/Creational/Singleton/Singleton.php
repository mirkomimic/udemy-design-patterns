<?php

namespace App\Creational\Singleton;

class Singleton
{
  private static $instance = null;
  private $data;
  private function __construct()
  {
  }

  public static function instance()
  {
    if (self::$instance == null) {
      self::$instance = new Singleton();
    }

    return self::$instance;
  }

  public function setData($value)
  {
    $this->data = $value;
  }

  public function getData()
  {
    return $this->data;
  }
}
