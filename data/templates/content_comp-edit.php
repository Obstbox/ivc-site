<?php
include_once DB_PARAMS_FILE;
$computer_row = get_sql_row($db_params, $id);

?>

<div class="row" style="margin-top:50px;">
  <div class="row">
    
    <form action="index.php?page=comp-details&id=<?php echo $computer_row['id'];?>" method="post">
      <?php /* <input type="hidden" name="id" value="<?php echo $computer_row['id'];?>" /> ?> */ ?>

      <div class="row">            
        <div class="two columns">
          <label for="name">Сетевое имя *</label>
          <input class="u-full-width" type="text" placeholder="apk-akn1" 
            id="name" name="name" value="<?php echo $computer_row['name'];?>">
        </div>            
        <div class="two columns">
          <label for="inventory_num">Инвентарный №</label>
          <input class="u-full-width" type="text" placeholder="12345" 
            id="inventory_num" name="inventory_num" value="<?php echo $computer_row['inventory_num'];?>">
        </div>
        <div class="three columns">
          <label for="serial_num">Серийный №</label>
          <input class="u-full-width" type="text" placeholder="230AF4900BC00A" 
            id="serial_num" name="serial_num" value="<?php echo $computer_row['serial_num'];?>">
        </div>        
        <div class="five columns">
          <label for="location">Место установки *</label>
          <input class="u-full-width" type="text" placeholder="начальник 1й автоколонны" 
            id="location" name="location" value="<?php echo $computer_row['location'];?>">              
        </div>      
      </div>

      <div class="row">            
        <div class="six columns">
          <label for="video_card">Видео карта</label>
          <input class="u-full-width" type="text" placeholder="Встроенная" 
            id="video_card" name="video_card" value="<?php echo $computer_row['video_card'];?>">
        </div>            
        <div class="six columns">
          <label for="display">Монитор</label>
          <input class="u-full-width" type="text" placeholder="Benq FP93GX" 
            id="display" name="display" value="<?php echo $computer_row['display'];?>">              
        </div>
      </div>

      <div class="row">            
        <div class="six columns">
          <label for="cpu_name">Модель процессора *</label>
          <input class="u-full-width" type="text" placeholder="Intel Core i3-4170" 
            id="cpu_name" name="cpu_name" value="<?php echo $computer_row['cpu_name'];?>">
        </div>            
        <div class="six columns">
          <label for="cpu_freq">Частота процессора, МГц *</label>
          <input class="u-full-width" type="text" placeholder="3700" 
            id="cpu_freq" name="cpu_freq" value="<?php echo $computer_row['cpu_freq'];?>">              
        </div>
      </div>

      <div class="row">            
        <div class="six columns">
          <label for="ram_type">Тип ОЗУ *</label>
          <input class="u-full-width" type="text" placeholder="DDR-2" 
            id="ram_type" name="ram_type" value="<?php echo $computer_row['ram_type'];?>">
        </div>            
        <div class="six columns">
          <label for="ram_size">Объём ОЗУ, Мб *</label>
          <input class="u-full-width" type="text" placeholder="2048" 
            id="ram_size" name="ram_size" value="<?php echo $computer_row['ram_size'];?>">              
        </div>
      </div>

      <div class="row">            
        <div class="four columns">
          <label for="storage_name">Модель жёсткого диска/SSD *</label>
          <input class="u-full-width" type="text" placeholder="Seagate" 
            id="storage_name" name="storage_name" value="<?php echo $computer_row['storage_name'];?>">
        </div>            
        <div class="four columns">
          <label for="storage_size">Объём жёсткого диска/SSD, Гб *</label>
          <input class="u-full-width" type="text" placeholder="320" 
            id="storage_size" name="storage_size" value="<?php echo $computer_row['storage_size'];?>">              
        </div>
        <div class="four columns">
          <label for="cd_drive">CD/DVD-дисковод</label>
          <input class="u-full-width" type="text" placeholder="Отсутствует" 
            id="cd_drive" name="cd_drive" value="<?php echo $computer_row['cd_drive'];?>">              
        </div>
      </div>

      <div class="row">            
        <div class="four columns">
          <label for="mother_board">Материнская плата *</label>
          <input class="u-full-width" type="text" placeholder="Foxconn 45GM" 
            id="mother_board" name="mother_board" value="<?php echo $computer_row['mother_board'];?>">
        </div>      
        <div class="two columns">
          <label for="install_date">Установлен *</label>
          <input class="u-full-width" type="date" placeholder="" 
            id="install_date" name="install_date" value="<?php echo $computer_row['install_date'];?>">              
        </div>      
        <div class="six columns">
          <label for="notes">Примечание</label>
          <input class="u-full-width" type="text" placeholder="Однажды, в студеную зимнюю пору я из лесу вышел..." 
            id="notes" name="notes" value="<?php echo $computer_row['notes'];?>">
        </div>        
      </div>    
      <div class="row">
        <input class="button-primary u-pull-right" type="submit" name="submit" value="Сохранить">
        <input class="button u-pull-right" type="button" value="Назад">
      </div>
      
    </form> 

  </div>
</div>