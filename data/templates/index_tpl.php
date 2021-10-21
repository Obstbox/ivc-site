<?php

$varrr = 44;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ title }}</title>
</head>
<body>
  <header>
    <a href="#" class="logo">&emsp;Портал ИВЦ&emsp;</a>
    <a href="#" class="button">На главную</a>
    <a href="#" class="button">Компьютеры</a>
    <a href="#" class="button">Принтеры</a>
    <a href="#" class="button">Журнал</a>
    <a href="#" class="button">UPS</a>
    <button>Download</button>
  </header>

  <nav>
  <a href="#">Category 1</a>
  <span>Category 2</span>
  <a href="#" class="sublink-1">Item 2.1</a>
  <span class="sublink-1">Category 2.2</span>
  <a href="#" class="sublink-2">Item 2.2.1</a>
</nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1>Портал ИВЦ</h1>
      </div>  
      <div class="col-sm-2">1</div>
      <div class="col-sm-2">2</div>
    </div>
    <div class="row">

      {{ message }}
      
    </div>
  </div>
  <footer style="position: absolute;bottom: 0; width:100%; text-align:center;">
    <p>2021г. Все права по барабану.</p>
  </footer>
</body>
</html>

