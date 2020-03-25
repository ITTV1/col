<?php
//http://php.xxx:8080/key.php
//Использование ключей
//foreach ($array as $key => $value) {
//  ...
//}
  function ar($arr, $callback)
  {
    foreach($arr as $key => $value) {
      yield $key => $callback($value);
    }
  }

  $arr = [
    "first" => 1,
    "second" => 2,
    "third" => 3,
    "fourth" => 4,
    "fifth" => 5,
    "sixth" => 6,
    "seven" => 7
  ];
  $sum = ar($arr, function($e){ return $e * $e; });
  foreach($sum as $key => $val) echo "$val ($key) ";
?>
