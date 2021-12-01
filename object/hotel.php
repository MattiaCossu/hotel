<?php
class Hotel
{
  private $name;
  private $indirizzo;
  private int $cap;

  public function __construct($name, $indirizzo, $cap)
  {
    $this-> name = $name;
    $this-> indirizzo = $indirizzo;
    $this-> cap = $cap;
  }

  public function getName(){
    return $this-> name;
  }

  public function getIndirizzo(){
    return $this-> indirizzo;
  }

  public function getCap(){
    return $this-> cap;
  }
}
?>
