<?php
$items = [
  'main' => 'На главную',
  'computers' => 'Компьютеры', 
  'printers' => 'Принтеры', 
  'iso' => 'Образы', 
  'ups' => 'UPS', 
  'requests' => 'Заявки', 
  'journal' => 'Журнал' 
];

if (array_key_exists($page, $items)) {
  unset ($items[$page]);
}
?>

<div class="row">
  <?php foreach($items as $key => $value): ?>
    <a href="index.php?page=<?php echo $key;?>" class="menu-item"><?php echo $value; ?></a>
  <?php endforeach; ?>
</div>