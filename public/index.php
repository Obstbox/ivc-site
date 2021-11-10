<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../core/functions.php';

$page = $_GET['page'] ?? 'mainpage';
$id = $_GET['id'] ?? null;


switch ($page) {
    case 'mainpage':
        $content_template = 'mainpage';
        break;

    case 'comp-new':
        $content_template = 'comp-new';
        break;

    case 'comp-list':
        $sql_table = 'computers';
        $data = read_all_rows($sql_table);
        $content_template = 'list';
        break;

    case 'comp-details':
        $sql_table = 'computers';
        if (isset($id)) {
            $data = read_row($sql_table, $id);
        } else {
            error404();
        }
        $content_template = 'comp-details';
        break;

    case 'comp-edit':
        $sql_table = 'computers';
        if (isset($id)) {
            $data = read_row($sql_table, $id);
        } else {
            error404();
        }
        $content_template = 'comp-edit';
        break;

    default:
        error404();
}

render_page($content_template, $data);

