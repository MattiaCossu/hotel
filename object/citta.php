<?php
class Citta
{
  private $name;
  private int $cap;

  public function __construct($name, $cap)
  {
    $this-> name = $name;
    $this->cap = $cap;
  }

  public function getName(){
    return $this-> name;
  }

  public function getCap(){
    return $this-> cap;
  }
}
?>
