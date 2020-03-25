<?php

## Вывод Квадратов четных элементов.
  function comb($ar, $callback1)
  {
    foreach($ar as $value) {
      yield $callback1($value);
    }
  }

  function html($arr, $callback)
  {
    foreach($arr as $value) {
      if($callback($value)) yield $value;
    }
  }

  $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  $select = html($a, function($e){ return $e % 2 == 0 ? true : false; });
  $collect = comb($select, function($e){ return $e * $e; });
  foreach($collect as $val) echo "$val ";
?>
