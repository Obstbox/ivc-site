<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . "/../core/config.php";
include_once __DIR__ . "/../core/functions.php";

deleteSqlRow($db_params, $_GET['id']);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Список компьютеров</title>
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

      <div class="row" style="margin-top:25%"></div>
      <p>Запись была удалена из базы данных. <a href="computerTable.php">Вернуться к списку</a></p>      
    </div>
  </body>
</html>
