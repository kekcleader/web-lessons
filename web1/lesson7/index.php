<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Работа с файлами</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="main">
  <h1>Гостевая книга</h1>
  <h2>
    <?php echo date('Y-m-d H:i:s (z-й день в году)'); ?>
  </h2>

  <section class="send-form">
    <form class="fields" action="send.php" method="POST">
      <input type="hidden" name="send" value="1">
      <label>
        <span>Имя:</span>
        <input class="field" type="text" name="name">
      </label>
      <label>
        <span>Сообщение:</span>
        <textarea rows="5" class="field" name="msg"></textarea>
      </label>
      <label>
        <input type="submit" value="Отправить">
      </label>
    </form>
  </section>

  <section class="comments">

    <?php
    $s = file_get_contents('data/msg.txt');
    $m = explode('@#@', $s);

    for ($i = 0; $i < count($m) - 1; $i += 2) {
      ?>
      <article class="comment">
        <div class="name">
          <?php echo trim($m[$i]); ?>
        </div>
        <div class="msg">
          <?php echo mynl2br(htmlspecialchars(trim($m[$i + 1]))); ?>
        </div>
      </article>
      <?php
    }
    ?>

  </section>

</main>

</body>
</html>

<?php

# Аналог nl2br, но без ' /'.
function mynl2br($s) {
  return str_replace("\n", '<br>', $s);
}

