<?php
//true false
#получаем только четные элементы.
  function s($a, $callback1)
  {
    foreach($a as $value) {
      if($callback1($value)) yield $value;
    }
  }

  $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  $select = s($a, function($e){ return $e % 2 == 0 ? true : false; });
  foreach($select as $val) echo "$val ";
?>
