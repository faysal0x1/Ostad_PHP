<?php

$file_name = "ostad.txt";
$date = date("Y-m-d H:i:s");

if (!file_exists($file_name)) {
  $file = fopen($file_name, "w+");
  fwrite($file, $date);
  fclose($file);
} else {

  $file = fopen($file_name, "r+");
  $content = fread($file, filesize($file_name));
  fseek($file, 0);
  fwrite($file, $date . "\n" . $content);
  fclose($file);
}

?>
