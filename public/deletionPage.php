<?php

require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../core/functions.php";



?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Удалить запись</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="icon" type="image/png" href="gears.png">
  </head>
  <body>
    <div class="container">

      <div class="row" style="margin-top:10px">
        <div class="eight columns"><h4>Портал ИВЦ</h4></div>
        <div class="two columns">&nbsp</div>
        <div class="two columns"><a href=index.php>на главную</a></div>
      </div>

      <div class="row" style="margin-top:20%">
        <h5>Действительно удалить запись&emsp;<strong><i><?php echo $_GET['name'];?></i></strong>&emsp;
        со следующими параметрами:</h5>
      </div>

      <div class="row">
        <table class="u-full-width">
          <thead>
            <tr>              
              <th>Название</th>
              <th>Расположение</th>
              <th>Дата ввода</th>
              <th>Процессор</th>                          
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row" style="margin-top: 10%;">
        <div class="one-half column">
          <a class="button button-primary u-pull-right" id="warging-btn" href="#">&emsp;Да&emsp;</a>
        </div>
        <div class="one-half column warning">
          <a class="button u-pull-left" href="#">Отмена</a>
        </div>
      </div>
      
    </div>
  </body>
</html>