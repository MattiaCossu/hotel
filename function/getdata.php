<?php
const FOLDER = "./databese";

function getFile() {
  $files = array();
  if(is_dir(FOLDER))
  {
    $files =  preg_grep('/^(?!tmp|(?!([^.]))).*/', scandir(FOLDER));
  }
  return $files;
}

function getData() {
  $path = "./databese";
  $data = array();
  $data_f = array();
  $i = 0;
  foreach(getFile() as $file)
  {
      $data[$i] = readCsv($path . "/" . $file);
      $i++;
  }
  return $data;
}

 ?>
