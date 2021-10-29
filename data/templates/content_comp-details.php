<?php
include_once DB_PARAMS_FILE;
if (array_key_exists("submit", $_POST)) {
  $result = update_sql_row($db_params, $id);  
}
if ($result) {
  $computer_row = get_sql_row($db_params, $id);

  $rules = [  
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
    'notes' => 'Примечание'
  ];
}
?>

<div class="row" style="margin-top:50px;">
  <p>подробные параметы компьютера <strong><?php echo $computer_row['name'];?></strong> </p>
  
  <table class="details u-full-width">
    <?php foreach ($rules as $col_sqlname => $col_label): ?>
    <tr>
      <td><?php echo $col_label; ?></td>
      <td>
        <?php 
        if ( $col_sqlname == 'video_card' && (empty($computer_row[$col_sqlname])) ) {
          echo "Встроенная";
        } else if ( $col_sqlname == 'cd_drive' && (empty($computer_row[$col_sqlname])) ) {
          echo "Отсутствует";
        } else {
          echo $computer_row[$col_sqlname];
        }
        ?>
      </td>
    </tr>
    <?php endforeach; ?>    
  </table>
  
  <a class="button button-primary u-pull-right">Добавить</a>
  
</div>