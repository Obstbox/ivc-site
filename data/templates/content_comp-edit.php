<?php
include_once DB_PARAMS_FILE;
$computer_row = get_sql_row($db_params, $id);

$rules = [
  'id' => 'id',
  'serial_num' => 'Серийный №',
  'inventory_num' => 'Инвентарный №',
  'name' => 'Сетевое имя',
  'location' => 'Расположение',
  'mother_board' => 'Материнская плата',
  'ram_type' => 'тип ОЗУ',
  'ram_size' => 'размер ОЗУ, Мб',
  'cpu_name' => 'Модель процессора',
  'cpu_freq' => 'Частота процессора, МГц',
  'storage_name' => 'Жесткий диск (SSD)',
  'storage_size' => 'Размер ЖД (SSD), Гб',
  'video_card' => 'Видео карта',
  'display' => 'Монитор',
  'cd_drive' => 'cd/dvd',
  'install_date' => 'Дата установки',
];

$form_rows = ceil(count($rules)/2);
$rules_keys = array_keys($rules);
$rules_values = array_values($rules);
$i = 0;

?>

<div class="row" style="margin-top:50px;">
  <div class="row">
    <form>
      <?php while ($i < count($rules_keys)): ?>

        <div class="row fff1">
          <div class="six columns">
            <label for="<?php echo next($rules_keys); $i++; ?>"> <?php echo next($rules_values);?> </label>
            <input class="u-full-width" type="text" placeholder="<?php echo current($rules_values);?>" id="<?php echo current($rules_keys);?>">          
          </div>
          <div class="six columns">
            <label for="<?php echo next($rules_keys); $i++; ?>"> <?php echo next($rules_values);?> </label>
            <input class="u-full-width" type="text" placeholder="<?php echo current($rules_values);?>" id="<?php echo current($rules_keys);?>">          
          </div>
        </div>

      <?php endwhile; ?>
    </form>    
  </div>