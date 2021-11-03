<?php
include_once DB_PARAMS_FILE;


$required_fields = [
  'name' => 'имя обязательно', 
  'location' => 'место обязательно',
  'cpu_name' => 'процессор обязателен', 
  'cpu_freq' => 'частота обязательна',
  'install_date' => 'дата обязательна',
  'ram_type' => 'ОЗУ обязательно',
  'ram_size' => 'объём обязателен',
  'storage_name' => 'ЖД обязателен',
  'storage_size' => 'объём обязателен',
  'mother_board' => 'плата обязательна',  
];


if (array_key_exists("submit", $_POST)) {
  foreach ($required_fields as $key => $value) {
    if ( (array_key_exists($key, $_POST)) && (empty($_POST[$key])) ) {
      $warnings[$key] = $value;
    } else {
      $warnings[$key] = '';
    }
  }

  // убрать пустые строки и 'submit' в том числе  
  $custom_post = array_filter($_POST);
  unset($custom_post['submit']);

  // если все необходимые поля были заполнены
  if (empty(array_diff_key($required_fields, $custom_post)))
  {
    $inserted_id = new_sql_record($db_params, $custom_post);
    $uri = "index.php?page=comp-details&id={$inserted_id}";    
    header("Location: {$uri}");
  }
}


?>

<div class="row" style="margin-top:50px;">
  <h5>Новая запись</h5>
</div>
<div class="row">
  <form action="index.php?page=comp-new" method="post">
    <div class="row">            
      <div class="four columns">
        <label for="name" class="required">Сетевое имя <span class="error"><?php echo $warnings['name'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="apk-akn1" 
          id="name" name="name" value="<?php echo $_POST['name'] ?? '';?>">
      </div> 
      <div class="eight columns">
        <label for="location" class="required">Место установки <span class="error"><?php echo $warnings['location'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="начальник 1й автоколонны" 
          id="location" name="location" value="<?php echo $_POST['location'] ?? '';?>">              
      </div>                   
    </div>
    <div class="row">
      <div class="four columns">
        <label for="inventory_num">Инвентарный №</label>
        <input class="u-full-width" type="text" placeholder="12345" 
          id="inventory_num" name="inventory_num" value="<?php echo $_POST['inventory_num'] ?? '';?>">
      </div>
      <div class="four columns">
        <label for="serial_num">Серийный №</label>
        <input class="u-full-width" type="text" placeholder="230AF4900BC00A" 
          id="serial_num" name="serial_num" value="<?php echo $_POST['serial_num'] ?? '';?>">
      </div>
      <div class="four columns">
        <label for="install_date" class="required">Установлен <span class="error"><?php echo $warnings['install_date'] ?? '';?></span></label>
        <input class="u-full-width" type="date" placeholder="" 
          id="install_date" name="install_date" value="<?php echo $_POST['install_date'] ?? '';?>">              
      </div> 
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="video_card">Видео карта</label>
        <input class="u-full-width" type="text" placeholder="Встроенная" 
          id="video_card" name="video_card" value="<?php echo $_POST['video_card'] ?? '';?>">
      </div>            
      <div class="six columns">
        <label for="display">Монитор</label>
        <input class="u-full-width" type="text" placeholder="Benq FP93GX" 
          id="display" name="display" value="<?php echo $_POST['display'] ?? '';?>">              
      </div>
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="cpu_name" class="required">Модель процессора <span class="error"><?php echo $warnings['cpu_name'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="Intel Core i3-4170" 
          id="cpu_name" name="cpu_name" value="<?php echo $_POST['cpu_name'] ?? '';?>">
      </div>            
      <div class="six columns">
        <label for="cpu_freq" class="required">Частота процессора, МГц <span class="error"><?php echo $warnings['cpu_freq'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="3700" 
          id="cpu_freq" name="cpu_freq" value="<?php echo $_POST['cpu_freq'] ?? '';?>">              
      </div>
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="ram_type" class="required">Тип ОЗУ <span class="error"><?php echo $warnings['ram_type'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="DDR-2" 
          id="ram_type" name="ram_type" value="<?php echo $_POST['ram_type'] ?? '';?>">
      </div>            
      <div class="six columns">
        <label for="ram_size" class="required">Объём ОЗУ, Мб <span class="error"><?php echo $warnings['ram_size'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="2048" 
          id="ram_size" name="ram_size" value="<?php echo $_POST['ram_size'] ?? '';?>">              
      </div>
    </div>

    <div class="row">            
      <div class="four columns">
        <label for="storage_name" class="required">Модель жёсткого диска/SSD <span class="error"><?php echo $warnings['storage_name'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="Seagate" 
          id="storage_name" name="storage_name" value="<?php echo $_POST['storage_name'] ?? '';?>">
      </div>            
      <div class="four columns">
        <label for="storage_size" class="required">Объём жёсткого диска/SSD, Гб <span class="error"><?php echo $warnings['storage_size'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="320" 
          id="storage_size" name="storage_size" value="<?php echo $_POST['storage_size'] ?? '';?>">
      </div>
      <div class="four columns">
        <label for="cd_drive">CD/DVD-дисковод</label>
        <input class="u-full-width" type="text" placeholder="Отсутствует" 
          id="cd_drive" name="cd_drive" value="<?php echo $_POST['cd_drive'] ?? '';?>">              
      </div>
    </div>

    <div class="row">            
      <div class="five columns">
        <label for="mother_board" class="required">Материнская плата <span class="error"><?php echo $warnings['mother_board'] ?? '';?></span></label>
        <input class="u-full-width" type="text" placeholder="Foxconn 45GM" 
          id="mother_board" name="mother_board" value="<?php echo $_POST['mother_board'] ?? '';?>">
      </div>
      <div class="seven columns">
        <label for="notes">Примечание</label>
        <input class="u-full-width" type="text" placeholder="Однажды, в студеную зимнюю пору я из лесу вышел..." 
          id="notes" name="notes" value="<?php echo $_POST['notes'] ?? '';?>">
      </div>        
    </div>    
    <div class="row" style="margin-top: 5%;">
      <span class="u-pull-left"><strong>Поля со звёздочкой (*) - обязательные</strong></span>      
      <input class="button-primary u-pull-right" type="submit" name="submit" value="Сохранить">
      <a class="button u-pull-right" href="index.php?page=computers">Назад</a>
    </div>    
  </form>   
</div>