<?php

namespace App\Structural\Facade;

class FacadeSystem
{
  private $subSysClass1;
  private $subSysClass2;
  private $subSysClass3;

  public function __construct()
  {
    $this->subSysClass1 = new SubSystemClass1();
    $this->subSysClass2 = new SubSystemClass2();
    $this->subSysClass3 = new SubSystemClass3();
  }

  public function method1()
  {
    $this->subSysClass1->subSysClass1Method1();
    $this->subSysClass2->subSysClass2Method2();
    $this->subSysClass3->subSysClass3Method1();
  }
  public function method2()
  {
    $this->subSysClass1->subSysClass1Method2();
    $this->subSysClass2->subSysClass2Method1();
    $this->subSysClass3->subSysClass3Method2();
  }
}
