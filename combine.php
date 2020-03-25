<?php

## Использование yield from. вывелись квадраты четных чисел
  function sq($v)
  {
    yield $v * $v;
  }

  function square($arr)
  {
    foreach($arr as $value) {
      if($value % 2 == 0) yield from sq($value);
    }
  }

  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  foreach(square($arr) as $val) echo "$val ";
?>
