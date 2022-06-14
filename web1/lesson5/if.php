<meta charset="utf-8">


<?php

$a = 11;
$b = '11.';

if ($b == $a) {
  echo 'A1.<br>';
} else {
  echo 'A2.<br>';
}

var_dump($a);

echo '<br>';

for ($i = 0; $i < 10; $i++) {
  echo $i.' ';
}

echo '<br>';

for ($i = 1; $i < 1000; $i *= 2) {
  echo $i.' ';
}

echo '<br>';

for ($j = 20; $j >= 10; $j--) {
  echo $j.' ';
}

echo '<br>';

$i = 1;
while ($i <= 5) {
  echo $i.' ';
  $i++;
}

echo '<br>';

$i = 5;
do {
  echo $i;
  $i--;
} while ($i > 10);

?>

<a href="index.php">На начало</a>
