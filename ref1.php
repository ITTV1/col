<?php
# Возврат значения по ссылке генератора
  function &ref()
  {
    $val = 6;
    while ($val > 0) {
      yield $val;
    }
  }

  foreach (ref() as &$number) {
    echo (--$number).' ';
  }
?>
