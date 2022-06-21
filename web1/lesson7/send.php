<?php

if (!isset($_POST['send'])) die('!');

$name = trim(@$_POST['name']);
$msg = trim(@$_POST['msg']);

if (empty($name) || empty($msg)) go_error(1);
if (mb_strlen($name) < 3) go_error(2);
if (mb_strlen($name) > 60) go_error(3);
if (mb_strlen($msg) < 3) go_error(4);
if (mb_strlen($msg) > 5000) go_error(5);

save_msg($name, $msg);

function go_error($n) {
  $m = array(
    1 => 'Данные не введены',
    2 => 'Имя слишком короткое.',
    3 => 'Имя слишком длинное.',
    4 => 'Сообщение слишком короткое.',
    5 => 'Сообщение слишком длинное.',
  );
  echo 'Ошибка! '.$m[$n];
  die;
}

function save_msg($name, $msg) {
  # Убираем \r (CR, возврат каретки)
  $name = str_replace("\r", "", $name);
  $msg = str_replace("\r", "", $msg);

  $s = $name."\n@#@\n".$msg."\n@#@\n";
  if (file_put_contents('data/msg.txt', $s, FILE_APPEND) === false) {
    die('Could not write to file.');
  }

  header('Location: index.php');
}

/*

Файл выглядит так:

        ИМЯ1
        @#@
        СООБЩЕНИЕ1
        @#@
        ИМЯ2
        @#@
        СООБЩЕНИЕ2
        @#@



CONST
  append = 3;
  lockEx = 5;
...

VAR x: SET;
BEGIN
  x := {0, 2, 5..9};

Files.PutContents(fname, data, {});     --> 0
Files.PutContents(fname, data, {Files.append, Files.lockEx});
        0 = 000...000000000000
 {append} = 000...000000001000 - 3-й нолик справа превратился в единичку
 {lockEx} = 000...000000100000 - 5-й нолик справа превратился в единичку
результат = 000...000000101000 - поразрядное ИЛИ

    * * *

FILE_APPEND = 8;
    LOCK_EX = 32;

file_put_contents($fname, $data, 0);    --> 0
file_put_contents($fname, $data, FILE_APPEND | LOCK_EX);

FILE_APPEND = 000...000000001000
    LOCK_EX = 000...000000100000
  результат = 000...000000101000 - поразрядное ИЛИ (|)

*/
