<?php
include_once DB_PARAMS_FILE;
$computer_row = get_sql_row($db_params, $id);  

if ($_GET['written'] == true) {
  $display_html_elem = 'true';
} else {
  $display_html_elem = 'none';
}

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

?>

<div class="row" style="margin-top:50px;">
  <p>подробные параметы компьютера <strong><?php echo $computer_row['name'];?></strong> 
    <span class="notify" style="display:<?php echo $display_html_elem;?>">успешно записаны</span> 
  </p>
  
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
  
  <div class="row">    
    <a class="button button-primary u-pull-right" href='index.php?page=comp-edit&id=<?php echo $computer_row['id'];?>'>Изменить</a>
    <a class="button u-pull-right" href="index.php?page=computers">Назад</a>        
  </div> 
  
</div>