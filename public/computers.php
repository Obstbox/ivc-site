<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../core/functions.php";


$computer_table_data = getDbData($db_params);
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

      <div class="row" style="margin-top:10px">
        <div class="eight columns"><h4>Портал ИВЦ</h4></div>
        <div class="two columns">&nbsp</div>
        <div class="two columns"><a href=index.php>на главную</a></div>
      </div>  

      <div class="row" style="margin-top:20%">
        <h5>Список персональных компьютеров предприятия</h6>
        <table class="u-full-width">
          <thead style=>
            <tr>
              <th>&nbsp#&nbsp</th>
              <th>Название</th>
              <th>Должность оператора</th>
              <th>Частота ЦПУ</th>
              <th>Тип ОЗУ</th>
              <th><i>Действия</i></th>
              <th>id</th>
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
              <td>                
                <i class="material-icons">
                  <a href="detailsPage.php?id=<?php echo $row['id'];?>">arrow_forward</a>
                </i>              
                <i class="material-icons">
                  <a href="editionPage.php?id=<?php echo $row['id'];?>">edit</a>
                </i>              
                <i class="material-icons">
                  <a href="deletionPage.php?name=<?php echo $row['name'];?>" style="color: black">delete_forever</a>
                </i>                
              </td>
              <td><?php echo $row['id']; ?></td>   
            </tr>
            </tbody>
          <?php endforeach; ?>            
        </table>
      </div>      
    </div>
  </body>
</html>
