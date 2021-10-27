<?php
include_once DB_PARAMS_FILE;
$computer_row = get_sql_row($db_params, $id);
$i = 1;
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

?>

<div class="row">
  <?php for ($i = 0; $i++; $i < 5): ?>
    <p>q<?php echo $i;?></p>
    <?php endfor; ?>
</div>




<div class="row" style="margin-top:50px;">
  <form>
    <div class="row">            
      <div class="four columns">
        <label for="netName">сетевое имя *</label>
        <input class="u-full-width" type="text" placeholder="apk-akn1" id="netName">
      </div>            
      <div class="eight columns">
        <label for="location">должность оператора (или место установки) *</label>
        <input class="u-full-width" type="text" placeholder="начальник 1й автоколонны" id="location">              
      </div>
    </div>

    <div class="row">            
      <div class="four columns">
        <label for="inventary">инвентарный №</label>
        <input class="u-full-width" type="text" placeholder="12345" id="inventary">
      </div>
      <div class="four columns">
        <label for="serial">серийный №</label>
        <input class="u-full-width" type="text" placeholder="230AF4900BC00A" id="serial">
      </div>
      <div class="four columns">
        <label for="install-date">дата ввода в эксплуатацию *</label>
        <input class="u-full-width" type="date" placeholder="" id="install-date">              
      </div>
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="video-card">Видео карта</label>
        <input class="u-full-width" type="text" placeholder="NVIDIA Riva TNT2 PRO" id="video-card">
      </div>            
      <div class="six columns">
        <label for="display">Дисплей</label>
        <input class="u-full-width" type="text" placeholder="Benq FP93GX" id="display">              
      </div>
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="cpu-name">Процессор *</label>
        <input class="u-full-width" type="text" placeholder="Intel Core i3-4170" id="cpu-name">
      </div>            
      <div class="six columns">
        <label for="cpu-freq">Частота процессора, МГц *</label>
        <input class="u-full-width" type="text" placeholder="3700" id="cpu-freq">              
      </div>
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="ram-type">Тип ОЗУ *</label>
        <input class="u-full-width" type="text" placeholder="DDR-2" id="ram-type">
      </div>            
      <div class="six columns">
        <label for="ram-size">Объём ОЗУ, Мб *</label>
        <input class="u-full-width" type="text" placeholder="2048" id="ram-size">              
      </div>
    </div>

    <div class="row">            
      <div class="eight columns">
        <label for="storage-name">Производитель жёсткого диска. Если SSD - указать в скобках *</label>
        <input class="u-full-width" type="text" placeholder="Seagate" id="storage-name">
      </div>            
      <div class="four columns">
        <label for="storage-size">Объём жёсткого диска (SSD), Гб *</label>
        <input class="u-full-width" type="text" placeholder="320" id="storage-size">              
      </div>
    </div>

    <div class="row">            
      <div class="six columns">
        <label for="mother-board">Производитель и модель материнской платы *</label>
        <input class="u-full-width" type="text" placeholder="Foxconn 45GM" id="mother-board">
      </div>            
      <div class="six columns">
        <label for="cd-drive">CD/DVD-дисковод</label>
        <input class="u-full-width" type="text" placeholder="Optiarc DVD RW AD-7190A" id="cd-drive">              
      </div>
    </div>


    
    <input class="button-primary u-pull-right" type="submit" value="Подтвердить">
  </form>
  
  <a class="button button-primary u-pull-right">Добавить</a>  
</div>