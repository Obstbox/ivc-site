<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . "/../core/config.php";
include_once __DIR__ . "/../core/functions.php";

$row = getSqlRow($db_params, $_GET['id']);
// var_dump($row);
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
      <hr>
      <div class="row" style="margin-top:10px">
        <h5>Добавить компьютер в базу данных</h5>
        <p style="color: #a30303"> поля со звёздочкой (*) являются обязательными</p>
        <br>
        <form>
          <div class="row">            
            <div class="four columns">
              <label for="netName">сетевое имя *</label>
              <input class="u-full-width" type="text" placeholder="apk-akn1" id="netName">
            </div>            
            <div class="eight columns">
              <label for="location">должность оператора (или место установки) *</label>
              <input class="u-full-width" type="text" placeholder="начальник 1й автоколонны" id="location">              
            </div>
          </div>

          <div class="row">            
            <div class="four columns">
              <label for="inventary">инвентарный №</label>
              <input class="u-full-width" type="text" placeholder="12345" id="inventary">
            </div>
            <div class="four columns">
              <label for="serial">серийный №</label>
              <input class="u-full-width" type="text" placeholder="230AF4900BC00A" id="serial">
            </div>
            <div class="four columns">
              <label for="install-date">дата ввода в эксплуатацию *</label>
              <input class="u-full-width" type="date" placeholder="" id="install-date">              
            </div>
          </div>

          <div class="row">            
            <div class="six columns">
              <label for="video-card">Видео карта</label>
              <input class="u-full-width" type="text" placeholder="NVIDIA Riva TNT2 PRO" id="video-card">
            </div>            
            <div class="six columns">
              <label for="display">Дисплей</label>
              <input class="u-full-width" type="text" placeholder="Benq FP93GX" id="display">              
            </div>
          </div>

          <div class="row">            
            <div class="six columns">
              <label for="cpu-name">Процессор *</label>
              <input class="u-full-width" type="text" placeholder="Intel Core i3-4170" id="cpu-name">
            </div>            
            <div class="six columns">
              <label for="cpu-freq">Частота процессора, МГц *</label>
              <input class="u-full-width" type="text" placeholder="3700" id="cpu-freq">              
            </div>
          </div>

          <div class="row">            
            <div class="six columns">
              <label for="ram-type">Тип ОЗУ *</label>
              <input class="u-full-width" type="text" placeholder="DDR-2" id="ram-type">
            </div>            
            <div class="six columns">
              <label for="ram-size">Объём ОЗУ, Мб *</label>
              <input class="u-full-width" type="text" placeholder="2048" id="ram-size">              
            </div>
          </div>

          <div class="row">            
            <div class="eight columns">
              <label for="storage-name">Производитель жёсткого диска. Если SSD - указать в скобках *</label>
              <input class="u-full-width" type="text" placeholder="Seagate" id="storage-name">
            </div>            
            <div class="four columns">
              <label for="storage-size">Объём жёсткого диска (SSD), Гб *</label>
              <input class="u-full-width" type="text" placeholder="320" id="storage-size">              
            </div>
          </div>

          <div class="row">            
            <div class="six columns">
              <label for="mother-board">Производитель и модель материнской платы *</label>
              <input class="u-full-width" type="text" placeholder="Foxconn 45GM" id="mother-board">
            </div>            
            <div class="six columns">
              <label for="cd-drive">CD/DVD-дисковод</label>
              <input class="u-full-width" type="text" placeholder="Optiarc DVD RW AD-7190A" id="cd-drive">              
            </div>
          </div>


          
          <input class="button-primary u-pull-right" type="submit" value="Подтвердить">
        </form>

        <!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

        <!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->

      </div>
  </body>
</html>
