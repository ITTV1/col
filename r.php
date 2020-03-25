<?php
//
# получаем только нечетные элементы. из массива. Четные числа при этом отбрасываются
  function r($arr1, $callback)
  {
    foreach($arr1 as $value1) {
      if(!$callback($value1)) yield $value1;
    }
  }

  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  $r1 = r($arr, function($e){ return $e % 2 == 0 ? true : false; });
  foreach($r1 as $val) echo "$val ";
?>
