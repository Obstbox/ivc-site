<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../core/functions.php";


$computer_table_data = getDbData($db_params);
// foreach($computer_table_data as $row) {
//   var_dump($row['id'], $row['name']);
// }
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?php echo $main_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>  
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
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
        <h5>Список персональных компьютеров предприятия</h6>
        <table class="u-full-width">
          <thead>
            <tr>
              <th>&nbsp#&nbsp</th>
              <th>Название</th>
              <th>Должность оператора</th>
              <th>Объем ОЗУ</th>
              <th>Тип ОЗУ</th>
            </tr>
          </thead>
          <?php foreach ($computer_table_data as $row): ?>
          <tbody>
            <tr>
              <td><?php echo current($row); ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['location']; ?></td>
              <td><?php echo $row['ram_size']; ?></td>
              <td><?php echo $row['cpu_freq']; ?></td>              
            </tr>
            </tbody>
          <?php endforeach; ?>            
        </table>
      </div>      
    </div>
  </body>
</html>
