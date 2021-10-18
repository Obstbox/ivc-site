<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$root_path = __DIR__ . "/..";

require_once $root_path . "/core/functions.php";
require_once $root_path . "/core/config.php";

$params = [
    'title' => 'Портал ИВЦ',
    'total_pc' => 138,
    'total_printer' => 49,
    'total_iso' => 199,
];


renderView('mainPage', $params);