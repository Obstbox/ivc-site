<?php

function get_sql_table(array $db_params): array
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

function get_sql_row(array $db_params, string $id)
{
    extract($db_params);
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name;charset=utf8", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $connect->prepare(
            "SELECT * FROM computers WHERE id = {$id};"
        );
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_BOTH);
        $result = $statement->fetch();
        return $result;
    } catch(PDOException $e) {
        return ['Error: ' => $e->getMessage()];
    }
}

function update_sql_row(array $db_params, string $id)
{
    
}

function render_page(string $index, ?int $id)
{
    $page_file = TEMPLATES_DIR . 'base.php';
   
    if (file_exists($page_file)) {
        $vars = [];

        $vars['title'] = get_title($index);
        $vars['header'] = get_header($index);    
        $vars['menu'] = get_menu($index);
        $vars['content'] = get_content($index, $id);

        ob_start();
        include_once $page_file;
        $content = ob_get_clean(); 
        foreach($vars as $k => $v) {
            $content = str_replace("{{ $k }}", $v, $content);
        }
    } else {        
        error404();
    }    
    return $content;    
}

function error404()
{
    header('HTTP/1.0 404 Not Found');
    echo 'Страница не найдена';
    exit;
}

function get_title(string $page)
{
    return $GLOBALS['pages'][$page]['title'] ?? 'Внутренний сайт ИВЦ';
}

function get_header($page)
{
    // if set and not empty
    if (!empty($GLOBALS['pages'][$page]['header'])) {
        ob_start();
        include_once TEMPLATES_DIR . 'header.php';
        return ob_get_clean();
    } else {
        return '';
    }
}

function get_menu($page)
{
    if (!empty($GLOBALS['pages'][$page]['menu'])) {
        ob_start();
        include_once TEMPLATES_DIR . 'menu.php';
        return ob_get_clean();
    } else {
        return '';
    }
}

function get_content(string $page, ?int $id)
{   
    $content_file = TEMPLATES_DIR . "content_{$page}.php";
    if (file_exists($content_file)) {
        ob_start();
        include_once $content_file;
        return ob_get_clean();
    } else {
        echo 'get_content() failed<br>';
        error404();
        return [];
    }    
}


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

function render($file)
{
    $file = TEMPLATES_DIR . '/' . $file . 'htlm';
    if (!is_file($file) || filesize($file) === 0) {
        echo "HTML-шаблон {$file} не существует либо пуст.";
        exit;
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

function loadPage(string $name, array &$pages)
// function loadPage(string $name, array $pages)
{
    $page = $pages[$name] ?? false;
    
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
*/



/*
// подмена будет зафиксирована в БД при сохранении => бессмысленно

function complete_for_view(array &$sql_result) {
    if (empty($sql_result['video_card'])) {
        $sql_result['video_card'] = 'Встроенная';
    }
    if (empty($sql_result['cd_drive'])) {
        $sql_result['cd_drive'] = 'Отсутствует';
    }
}
*/