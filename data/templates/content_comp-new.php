<?php
include_once DB_PARAMS_FILE;
$required_fields = [
  'name', 
  'location',
  'cpu_name', 
  'cpu_freq'
];

function check(string $key) {
  if (isset($_POST[$key])) {
    echo '<span style="display:none">(!)</span>';
  } else {
    echo '<span style="display:block">(!)</span>';
  }
}

?>

<div class="row" style="margin-top:50px;">
  <div class="row">
    
    <form action="index.php?page=comp-details&id=<?php echo $computer_row['id'];?>" method="post">
      <div class="row">            
        <div class="two columns">
          <label for="name" class="required">Сетевое имя<?php check('name');?></label>
          <input class="u-full-width" type="text" placeholder="apk-akn1" 
            id="name" name="name">
        </div>            
        <div class="two columns">
          <label for="inventory_num">Инвентарный №</label>
          <input class="u-full-width" type="text" placeholder="12345" 
            id="inventory_num" name="inventory_num">
        </div>
        <div class="three columns">
          <label for="serial_num">Серийный №</label>
          <input class="u-full-width" type="text" placeholder="230AF4900BC00A" 
            id="serial_num" name="serial_num">
        </div>        
        <div class="five columns">
          <label for="location" class="required">Место установки</label>
          <input class="u-full-width" type="text" placeholder="начальник 1й автоколонны" 
            id="location" name="location">              
        </div>      
      </div>

      <div class="row">            
        <div class="six columns">
          <label for="video_card">Видео карта</label>
          <input class="u-full-width" type="text" placeholder="Встроенная" 
            id="video_card" name="video_card">
        </div>            
        <div class="six columns">
          <label for="display">Монитор</label>
          <input class="u-full-width" type="text" placeholder="Benq FP93GX" 
            id="display" name="display">              
        </div>
      </div>

      <div class="row">            
        <div class="six columns">
          <label for="cpu_name" class="required">Модель процессора</label>
          <input class="u-full-width" type="text" placeholder="Intel Core i3-4170" 
            id="cpu_name" name="cpu_name">
        </div>            
        <div class="six columns">
          <label for="cpu_freq" class="required">Частота процессора, МГц</label>
          <input class="u-full-width" type="text" placeholder="3700" 
            id="cpu_freq" name="cpu_freq">              
        </div>
      </div>

      <div class="row">            
        <div class="six columns">
          <label for="ram_type" class="required">Тип ОЗУ</label>
          <input class="u-full-width" type="text" placeholder="DDR-2" 
            id="ram_type" name="ram_type">
        </div>            
        <div class="six columns">
          <label for="ram_size" class="required">Объём ОЗУ, Мб</label>
          <input class="u-full-width" type="text" placeholder="2048" 
            id="ram_size" name="ram_size">              
        </div>
      </div>

      <div class="row">            
        <div class="four columns">
          <label for="storage_name" class="required">Модель жёсткого диска/SSD</label>
          <input class="u-full-width" type="text" placeholder="Seagate" 
            id="storage_name" name="storage_name">
        </div>            
        <div class="four columns">
          <label for="storage_size" class="required">Объём жёсткого диска/SSD, Гб</label>
          <input class="u-full-width" type="text" placeholder="320" 
            id="storage_size" name="storage_size">
        </div>
        <div class="four columns">
          <label for="cd_drive">CD/DVD-дисковод</label>
          <input class="u-full-width" type="text" placeholder="Отсутствует" 
            id="cd_drive" name="cd_drive">              
        </div>
      </div>

      <div class="row">            
        <div class="four columns">
          <label for="mother_board" class="required">Материнская плата</label>
          <input class="u-full-width" type="text" placeholder="Foxconn 45GM" 
            id="mother_board" name="mother_board">
        </div>      
        <div class="two columns">
          <label for="install_date" class="required">Установлен</label>
          <input class="u-full-width" type="date" placeholder="" 
            id="install_date" name="install_date">              
        </div>      
        <div class="six columns">
          <label for="notes">Примечание</label>
          <input class="u-full-width" type="text" placeholder="Однажды, в студеную зимнюю пору я из лесу вышел..." 
            id="notes" name="notes">
        </div>        
      </div>    
      <div class="row" style="margin-top: 5%;">
        <span class="required u-pull-left"><strong>Поля со звёздочкой (*) - обязательные</strong></span>
        <input class="button-primary u-pull-right" type="submit" name="submit" value="Сохранить">
        <input class="button u-pull-right" type="button" value="Назад">
      </div>
      
    </form> 

  </div>
</div>