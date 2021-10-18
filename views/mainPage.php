<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?php echo $main_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- FONT -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="icon" type="image/png" href="gears.png">
</head>
  <body>
    <div class="container">

      <div class="row" style="margin-top:10px">
        <div class="eight columns"><h4>Портал ИВЦ</h4></div>
        <div class="two columns"><a href=#>Вход</a></div>
        <div class="two columns"><a href=#>Регистрация</a></div>
      </div>     

      <div class="row">
        <div class="two-thirds column" style="margin-top: 20%">          
          <ul>
            <li>Список <a href='computers.php'>компьютеров</a></li>
            <li>Список <a href=#>образов</a></li>
            <li>Список <a href=#>устройств печати</a></li>
            <li>Список <a href=#>UPS</a></li>
            <li>Оперативный <a href=#>журнал</a></li>
          </ul>
        </div>
        <div class="one-third column" style="margin-top: 25%">
        <p>БД содержит записей:
        <ul>
          <li>Компьютеры - <?php echo $total_computer; ?></li>          
          <li>Принтеры/МФУ - <?php echo $total_printer; ?></li>
        </ul>  
        </div>
      </div>
      
    </div>
  </body>
</html>
