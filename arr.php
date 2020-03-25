<?php

//Делегирование генераторов
# Использование массивовв генераторах
  function generators()
  {
    yield 1;
    yield from [3, 4];
  }

  foreach(generators() as $i) echo "$i ";
?>
