<meta charset="utf-8">

<?php

//$x = @$_GET['form2'];

echo '<br><br>';

// isset ~~ !empty
// !isset ~~ empty

if (!empty($_GET['firstname'])) {
  echo "X is set and its value is ${_GET['firstname']}.";
} else {
  echo 'X is not set.';
}

echo '<br><br>';

$firstname = $_GET['firstname'];

echo "Я знаю, что Вас зовут $firstname.<br><br>\n";

if (is_num($firstname)) {
  echo "Кстати, странное у вас ".
       "какое-то имя&hellip;<br><br>\n";
}

echo 'GET=<pre>';
var_dump($_GET);
echo '</pre>';

echo '<br><br>POST=<pre>';
var_dump($_POST);
echo '</pre>';

// $_POST
// $_GET
// $_FILES
// $_SERVER

/*

Оберон:      VAR m: ARRAY 10 OF INTEGER;


Паскаль:     var m: array[0..9] of Integer;
                 a: array['a'..'z'] of Integer;

                 m[3]      a['r']
*/


# Возвращает true, если $x - целое число,
# при этом тип $x может быть и строкой.
# Например: 25 -> true,
#           '25' -> true,
#           '  25  ' -> true,
#           '25a' -> false,
#           '-5' -> true,
#           'hello' -> false.
function is_num($x) {
  return @trim($x) === strval(@intval($x));
}
