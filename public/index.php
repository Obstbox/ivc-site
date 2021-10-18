<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$root_path = __DIR__ . "/..";

// require_once $root_path . "/core/config.php";
require_once $root_path . "/core/functions.php";

$params = [
    'main_title' => 'Портал ИВЦ',
    'total_computer' => 138,
    'total_printer' => 49,    
];


renderView('mainPage', $params);