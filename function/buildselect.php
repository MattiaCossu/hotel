<?php
/*
$array_hotel = buildArrayObj_hotel();
echo "<select>";
for ($i=0; $i < count($array_hotel); $i++) {
  echo "<br>";
  echo "<option>" . $array_hotel[$i] -> getName() . "</option>";
  echo "<br>";
  echo $array_hotel[$i] -> getIndirizzo();
  echo "<br>";
  echo $array_hotel[$i] -> getCap();
}
echo "</select>";
*/

function buildselectCitta() {
  $array_citta = buildArrayObj_citta();
  for ($i=0; $i < count($array_citta); $i++) {
    echo "<option>" . $array_citta[$i] -> getName() . "</option>";
  }
}

function buildselectHotel($value) {
var_dump($value);
echo "<h1> ciao </h1>";
}
 ?>
