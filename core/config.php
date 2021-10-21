<?php

define('CORE_DIR',      __DIR__ );
define('SITE_ROOT',     __DIR__ . '/../' );
define('DATA_DIR',      SITE_ROOT . 'data/');
define('TEMPLATES_DIR', DATA_DIR . 'templates/');

include_once CORE_DIR . '/functions.php';
include_once DATA_DIR . '/DB_params.php';
include_once DATA_DIR . '/site_pages.php';
