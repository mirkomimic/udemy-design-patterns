<?php

namespace App\Creational\Prototype;

abstract class Prototype
{
  abstract public function __clone();
  abstract public function usePrototype();
}
