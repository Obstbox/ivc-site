<?php

function renderView(String $view, Array $params)
{
    var_dump($params);
    if (!empty($params)) {
        foreach($params as $key=>$value) {
            $$key = $value;
        }
    }
    ob_start();
    include_once __DIR__ . "/../views/$view.php";
    $content = ob_get_contents();
    ob_end_flush();
}
