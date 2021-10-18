<?php

function renderView(String $view, Array $params)
{    
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

function checkDbConnection($db_params)
{   
    extract($db_params);
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection is ok";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}