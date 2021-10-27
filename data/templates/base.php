<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ title }}</title>
  <!-- FONT -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <!-- must be last because of redefinitions -->
  <link rel="stylesheet" href="custom.css">
  
  <link rel="icon" type="image/png" href="gears.png">
</head>
  <body>
    <div class="container">
      {{ header }}      
      {{ menu }}
      {{ content }}      
    </div>
    <div class="container">
      <footer id="footer" class="twelve columns" style="text-align:center;margin-top:20%;">
        2021г. &copy; Права пофигу
      </footer>
    </div>
  </body>
</html>
