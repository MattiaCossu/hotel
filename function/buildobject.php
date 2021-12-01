<?php
require "./object/citta.php";
require "./object/hotel.php";


function buildArrayObj_citta() {
  $array = getData();
  $array_obj = array();
  $i = 0;
  //var_dump($array[0]);
  foreach ($array[0] as $key => $value) {
    //$values = array_values($value);
    $array_obj[$i] = new Citta($value["nome"], $value["cap"]);
    $i++;
  }
  return $array_obj;
}

function buildArrayObj_hotel() {
  $array = getData();
  $array_obj = array();
  $i = 0;
  //var_dump($array[0]);
  foreach ($array[1] as $key => $value) {
    //$values = array_values($value);
    $array_obj[$i] = new Hotel($value["nome"],$value["indirizzo"] ,$value["cap"]);
    $i++;
  }
  return $array_obj;
}
?>
