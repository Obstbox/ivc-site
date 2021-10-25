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
    'cpu_freq' => 'Частота процессора, ГГц',
    'storage_name' => 'Жесткий диск(SSD)',
    'storage_size' => 'Размер ЖД(SSD), Гб',
    'video_card' => 'видео карта',
    'display' => 'Монитор',
    'cd_drive' => 'cd/dvd',
    'install_date' => 'дата установки',    
];

?>

<div class="row" style="margin-top:20%">
  <p>подробные параметы компьютера <strong><?php echo $computer_row['name'];?></strong> </p>
  <table class="u-full-width">
    <thead>
      <tr>
        <?php foreach ($rules as $values): ?>
        <th><?php echo $values; ?></th>
        <?php endforeach; ?>
      </tr>
    </thead>     
    <tbody>
      <tr>
        <?php foreach (array_keys($rules) as $key): ?>
        <td><?php echo $computer_row[$key]; ?></td>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
  
  <a class="button button-primary u-pull-right">Добавить</a>
  
</div>