<?php

/*
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

function getSqlTable(array $db_params): array
{
    extract($db_params);
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name;charset=utf8", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $connect->prepare("SELECT * FROM computers");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetchAll();
        return $result;       

    } catch(PDOException $e) {
        return ['Error: ' => $e->getMessage()];
    }
}

function getSqlRow(array $db_params, string $id)
{
    extract($db_params);
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name;charset=utf8", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $connect->prepare(
            "SELECT * FROM computers WHERE id = {$id};"
        );
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetch();
        return $result;
    } catch(PDOException $e) {
        return ['Error: ' => $e->getMessage()];
    }
}

function deleteSqlRow(array $db_params, String $id): array
{    
    extract($db_params);
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name;charset=utf8", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM computers WHERE id ={$id}";
        $connect->exec($sql);
        return ['ok'];
        } catch(PDOException $e) {
        return ['error' => $e->getMessage()];
    }
    $connect = null;
}
*/

function render_page(string $index)
{
    $keywords = ['title', 'menu', 'header', 'content'];
    $vars = [];
    
    $vars['title'] = get_title($index);
    $vars['header'] = get_header($index);

    echo '<pre>';
    var_dump($vars);
    echo '</pre>';
    exit;
    /*
    // get_file_contents() только прочитает содержимое
    // в то время как ob_start() выполнит php-код внутри html
    ob_start();
    include_once TEMPLATES_DIR . 'base_tpl.php';
    $content = ob_get_clean();    
    
    foreach($vars as $k => $v) {
        $content = str_replace("{{ $k }}", $v, $content);
    }
    
    echo $content;
    */
    
}

function loadPage(string $name, array &$pages)
// function loadPage(string $name, array $pages)
{
    $page = $pages[$name] ?? false;
    print_r($name);
    exit;
    if (isPageValid($page)) {
        $page_function = 'page_' . $page;
        if (function_exists($page_function)) {
            return $page_function($pages[$name]);
        } else {
            error404();
        }
    } else {
        error404();
    }    
    exit;
}

function isPageValid(array $page): bool
{
    if (!is_array($page) || empty($page)) {
       return false;
    } else {
        return true;
    }
}

function error404()
{
    header('HTTP/1.0 404 Not Found');
    echo 'Страница не найдена';
    exit;
}

function render($file, $vars = [])
{
    $file = TEMPLATES_DIR . '/' . $file . 'htlm';
    if (!is_file($file) || filesize($file) === 0) {
        echo "HTML-шаблон {$file} не существует либо пуст.";
        exit;
    }
}

function prepare_data($page)
{
    echo '<pre>';
    // var_dump($GLOBALS);
    var_dump($GLOBALS['pages'][$page]);
    echo '</pre>';
}

function get_title(string $page)
{
    return $GLOBALS['pages'][$page]['title'];
}

function get_header($page)
{
    if ($GLOBALS['pages'][$page]['header']) {
        ob_start();
        include_once TEMPLATES_DIR . 'header_tpl.php';
        return ob_get_clean();
    } else {
        return '';
    }
}