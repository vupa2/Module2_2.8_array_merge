<?php
function randomArray($length) {
  $arr = [];
  for ($i = 0; $i < $length; $i++) {
    $arr[] = random_int(0, 9);
  }
  return $arr;
}

$arr1 = randomArray(8);
$arr2 = randomArray(8);

$arr3 = array_merge($arr1, $arr2);

echo '<pre>';
var_dump($arr3);
echo '</pre>';
