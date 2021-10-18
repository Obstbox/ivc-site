<?php

require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../core/functions.php";



?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Список компьютеров</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
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

      <div class="row">
        <div class="eight columns">&nbsp</div>
        <div class="two columns">&nbsp</div>
        <div class="two columns"><a href=index.php>на главную</a></div>
      </div> 
      <div class="row" style="margin-top:20%">
        <h3>Действительно удалить запись <strong><?php echo $_GET['name'];?></strong> ?</h3>
      </div>
      <div class="row">
        <div class="one-half column">
          <a class="button button-primary u-pull-right" href="#">Да</a>
        </div>
        <div class="one-half column">
          <a class="button u-pull-left" href="#">Отмена</a>
        </div>
      </div>
    </div>
  </body>
</html>