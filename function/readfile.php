<?php

function readCsv($csv) {
  
  //The explode() function breaks a string into an array.
  //The file_get_contents() reads a file into a string.
  $lines = explode("\n", file_get_contents($csv));
  //The str_getcsv() function parses a string for fields in CSV format and returns an array containing the fields read.
  $headers_key = str_getcsv(array_shift($lines));
  $data = array();
  foreach ($lines as $line)
  {
    $row = array();
    foreach ( str_getcsv( $line ) as $key => $field )
    {
      if ($field != null) {
        $row[ $headers_key[ $key ] ] = $field;
      }
    }
    $row = array_filter( $row );
    if (!empty($row)) {
      $data[] = $row;
    }
  }
  return $data;
}


 ?>
