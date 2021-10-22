<?php
/* TEMPLATE_DIR/computers/content.php */
include_once DB_PARAMS_FILE;
$computers_data = getSqlTable($db_params);
?>

<div class="row" style="margin-top:20%">
  <h5>Список персональных компьютеров предприятия</h5>
  <table class="u-full-width">
    <thead>
      <tr>
        <!-- <th>&nbsp#&nbsp</th> -->
        <th>Название</th>
        <th>Расположение</th>
        <th>Процессор</th>
        <th>Оперативная память</th>
        <th><i>Действия</i></th>              
      </tr>
    </thead>    
    <?php foreach ($computers_data as $row): ?>    
    <tbody>
      <tr>              
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['cpu_name'] . ', ' . $row['cpu_freq'] . ' МГц'; ?></td>
        <td><?php echo $row['ram_type'] . ', ' . $row['ram_size'] . ' МБ'; ?></td>    
        <td>                
          <i class="material-icons">
            <a title="Подробнее" href="details.php?id=<?php echo $row['id'];?>">arrow_forward</a>
          </i>              
          <i class="material-icons">
            <a title="Изменить"href="edit.php?id=<?php echo $row['id'];?>">edit</a>
          </i>              
          <i class="material-icons">
            <a title="Удалить"href="deleteConfirm.php?id=<?php echo $row['id'];?>" style="color: black">delete_forever</a>
          </i>                
        </td>                
      </tr>
      </tbody>
    <?php endforeach; ?>            
  </table>
  
  <a class="button button-primary u-pull-right">Добавить</a>
  
</div>