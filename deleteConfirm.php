<?php

require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../core/functions.php";

$row = getSqlRow($db_params, $_GET['id']);
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
      <hr>

      <div class="row" style="margin-top:20%">
        <h5>Действительно удалить запись&emsp;
          <strong>
            <i>
              <?php echo $row['name'];?>
            </i>
          </strong>&emsp;
        со следующими параметрами?</h5>
      </div>

      <div class="row">
        <table class="u-full-width">
          <thead>
            <tr>              
              <th>Название</th>
              <th>Расположение</th>
              <th>Дата ввода</th>
              <th>Процессор</th>                          
              <th>Оперативная память</th>                          
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['location'];?></td>
              <td><?php echo $row['install_date'];?></td>
              <td><?php echo $row['cpu_name'] . ', ' . $row['cpu_freq'] . ' МГц'; ?></td>
              <td><?php echo $row['ram_type'] . ', ' . $row['ram_size'] . ' МБ'; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row" style="margin-top: 10%;">
        <div class="one-half column">
          <a class="button button-primary u-pull-right" id="warging-btn" href="deleted.php?id=<?php echo $row['id'];?>">&emsp;Да&emsp;</a>
        </div>
        <div class="one-half column">
          <a class="button u-pull-left" href="javascript:history.go(-1)">Отмена</a>
        </div>
      </div>
      <div class="row" style="margin-top:15%">
        <p style="color: #a30303">* На самом деле удалять ни в коем случае не нужно. Должен быть своего рода архив</p>
      </div>
      
    </div>
  </body>
</html>