<meta charset="utf-8">

<?php

function sum($x, $y) {
  return $x + $y;
}

function myfunc($a, $b) {
  echo "Решим пример.<br>".
       "Пусть a = $a, b = $b.<br>".
       "Сколько будет a + b?<br><br>".
       "a + b = $a + $b = ".sum($a, $b).
       ".<hr>\n";
}

myfunc(2, 3);
myfunc(25, 13);
myfunc(27, 5);
myfunc(1, 0);

?>

<a href="index.php">На начало</a>
