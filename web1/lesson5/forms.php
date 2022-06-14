<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Формы</title>
<link rel="stylesheet" href="forms.css">
</head>
<body>

<section class="page">

  <form action="parse.php" method="GET">
    <input type="hidden" name="form" value="1">

    Ваше имя:
    <input type="text" name="firstname" value="Джон">
    
    <br><br>

    Образование:
    <select name="education">
      <option value="high">Среднее</option>
      <option value="higher">Высшее</option>
      <option value="none" selected>Отсутствует</option>
    </select>
    
    <br><br>

    Образованность:
    <select name="education2[]" size="3" multiple>
      <option value="high">Среднее</option>
      <option value="higher" selected>Высшее</option>
      <option value="none" selected>Отсутствует</option>
    </select>

    <br><br>

    <label>
      <input type="checkbox" name="agree" value="yes" checked>
      Согласен с правилами использования информации
    </label>

    <br><br>

    Я прочёл:<br>
    <label>
      <input type="radio" name="books" value="1">
      Одну книгу
    </label>

    <br>

    <label>
      <input type="radio" name="books" value="2">
      Две книги
    </label>

    <br>

    <label>
      <input type="radio" name="books" value="3">
      Три книги
    </label>

    <br><br>

    И понял при этом:<br>
    <label>
      <input type="radio" name="books2" value="1" disabled>
      Одну книгу
    </label>

    <br>

    <label>
      <input type="radio" name="books2" value="2">
      Две книги
    </label>

    <br>

    <label>
      <input type="radio" name="books2" value="3">
      Три книги
    </label>

    <br><br>

    <textarea name="content" cols="50" rows="8" readonly>Привет!
Как дела?</textarea>

    <br><br>

    <input type="submit" value="Отправить">

  </form>

</section>

<br><br><br>
<a href="index.php">На начало</a>

</body>
</html>
