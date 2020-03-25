<?php

//Манипуляция массивами
//yield  while for
# Обработка каждого элемента массива и вывод их . Получается квадрат каждого числа.
//array_walk()
  function c($a, $callback)
  {
    foreach($a as $value) {
      yield $callback($value);
    }
  }

  $a1 = [1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12];
  $html = c($a1, function($e){ return $e * $e; });
  foreach($html as $value) echo "$value ";
?>
