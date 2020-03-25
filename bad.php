<?php

## Не экономное расходование памяти сервера или компьютера при программировании веб
  function php($size)
  {
    $arr = [];
    for($i = 0; $i < $size; $i++) {
      $arr[] = $i;
    }
    return $arr;
  }

  $range = php(100000);
  foreach($range as $i) echo "$i ";
  // Определяем количество используемой скриптом памяти в веб технологии
  echo memory_get_usage()."<br />";
?>
