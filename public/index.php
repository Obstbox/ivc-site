<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . "/../core/config.php";
include_once __DIR__ . "/../core/functions.php";

$current = $_GET['current'] ?? 'main';

switch ($current) {
    case 'main':
        header('Location: http://localhost:8882/main.php');
        break;
    case 'computerTable':
        header('Location: http://localhost:8882/computerTable.php');
        break;
}