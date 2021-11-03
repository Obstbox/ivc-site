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
    extract($db_params);
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name;charset=utf8", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $data = [
            'id' => $id,
            'serial_num' => $_POST['serial_num'],
            'inventory_num' => $_POST['inventory_num'],            
            'name' => $_POST['name'],
            'location' => $_POST['location'],
            'mother_board' => $_POST['mother_board'],
            'ram_type' => $_POST['ram_type'],
            'ram_size' => $_POST['ram_size'],
            'cpu_name' => $_POST['cpu_name'],
            'cpu_freq' => $_POST['cpu_freq'],
            'storage_name' =>$_POST['storage_name'],
            'storage_name' =>$_POST['storage_size'],
            'video_card' => $_POST['video_card'],
            'display' => $_POST['display'],
            'cd_drive' => $_POST['cd_drive'],
            'install_date' => $_POST['install_date'],
            'notes' => $_POST['notes']
        ];
                
        $statement = "UPDATE computers SET serial_num=:serial_num, inventory_num=:inventory_num, name=:name,
            location=:location, mother_board=:mother_board, ram_type=:ram_type, ram_size=:ram_size, cpu_name=:cpu_name,
            cpu_freq=:cpu_freq, storage_name=:storage_name, storage_name=:storage_name, video_card=:video_card, 
            display=:display, cd_drive=:cd_drive, install_date=:install_date, notes=:notes WHERE id=:id";
        
        $statement = $connect->prepare($statement);
        $statement->execute($data);
        // return $statement->rowCount(); 
    } catch(PDOException $e) {
        return $e->getMessage();         
    }
}

function new_sql_record(array $db_params, $data): int
{
    extract($db_params);

    $values_str = implode(", ", array_map(fn($d) => "'$d'", $data));
    $keys_str = implode(", ", array_keys($data));
    
    try {
        $connect = new PDO("mysql:host=$server_name;dbname=$table_name;charset=utf8", $db_user_name, $db_password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = "INSERT INTO computers ({$keys_str}) VALUES ({$values_str})";
        $connect->exec($statement);
        $lasd_id = $connect->lastInsertId();
        return $lasd_id;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function get_required_fields(string $view): array 
{
    switch($view) {
        case 'computers':
            return [
                'name' => 'имя обязательно', 
                'location' => 'место обязательно',
                'cpu_name' => 'процессор обязателен', 
                'cpu_freq' => 'частота обязательна',
                'install_date' => 'дата обязательна',
                'ram_type' => 'ОЗУ обязательно',
                'ram_size' => 'объём обязателен',
                'storage_name' => 'ЖД обязателен',
                'storage_size' => 'объём обязателен',
                'mother_board' => 'плата обязательна',  
            ];
            break;
        default:
            die('ошибка запроса требуемых полей формы!<br>');
    }
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