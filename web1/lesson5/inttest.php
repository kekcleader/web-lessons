<?php

$b = $c = 1;


$x = ' -62  ';
$a = @intval($x);

$s = strval($a);

$x2 = trim($x);

echo ' x = '; var_dump($x);
echo ' a = '; var_dump($a);
echo ' s = '; var_dump($s);
echo 'x2 = '; var_dump($x2);



function is_num($x) {
  return @trim($x) === strval(@intval($x));
}

echo is_num('hello') ? 'TRUE' : 'FALSE';

if (is_num('35.15')) {
  echo 'TRUE';
} else {
  echo 'FALSE';
}


if ($a < $b):
  echo 'hello';
  echo ' world';
elseif ($a < $c):
  echo 'hello2';
  echo ' world2';
else:
  echo 'what???';
  echo ' really????';
endif;

?>



<div class="error">
  <?php if (isset($error)): ?>
    Есть ошибка. Вот она: <?php echo $error; ?>
  <?php else: ?>
    Ошибок нет.
  <?php endif; ?>
</div>



<div class="error">
  <?php if (isset($error)) { ?>
    Есть ошибка. Вот она: <?php echo $error; ?>
  <?php } else { ?>
    Ошибок нет.
  <?php } ?>
</div>

<?php
$error = 'Пропущено число.';
?>

<div class="error">
  <?php
  if (isset($error)) {
    ?>
    Есть ошибка. Вот она: <?php echo $error; ?>
    <?php
  } else {
    ?>
    Ошибок нет.
    <?php
  }
  ?>
</div>


<div class="error">
  <?php
  if (isset($error)):
    ?>
    Есть ошибка. Вот она: <?php echo $error; ?>
    <?php
  else:
    ?>
    Ошибок нет.
    <?php
  endif;
  ?>
</div>






