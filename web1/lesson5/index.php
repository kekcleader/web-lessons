<meta charset="utf-8">

<?php include 'header.php'; ?>

2 + 2 = <?php echo 2 + 2; ?>.

<br><br>

<a href="if.php">Второй пример &mdash; if, for</a><br>
<a href="fn.php">Третий пример &mdash; функции</a><br>
<a href="forms.php">Четвёртый пример &mdash; обработка формы</a>

<br><br>

<?php

$x = 5;

echo $x;

echo "Hello, I know that x is $x.<br>\n";
echo 'Hello, I know that x is $x.<br>\n';

echo "\n";

echo "Он живёт в доме ${x}a.<br>\n";

$x = 7;
$y = -5;

echo "Он живёт в доме ";
echo $x;
echo "a.<br>\n";

$x = "-3";

echo 'Он живёт в доме '.$x."a.<br>\n";

echo $x + 7;

echo "World\r";
echo 'Hello\n Mc\'Donalds';

echo "\n\n<br><br>\n";

/*
%0D%0A

13 10
CR LF
*/

include 'test.php';
include 'test.php';
include 'test.php';
include_once 'test.php';
include_once 'test.php';
include_once 'test.php';

echo '<br>==A==<br>';

readfile('test.php');

echo '<br>==0==<br>';

include 'test2.php';

echo '<br>==1==<br>';

require 'test2.php';

echo '<br>==2==<br>';

