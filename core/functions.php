<?php

$_GLOBALS['db_params'] = [    
    'server_name' => 'localhost',
    'db_name' => 'ivc',
    'db_user_name' => 'ivan',
    'db_password' => 'qwezxc'
];



function error404()
{
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    die("Страница не найдена");
}

function read_all_rows($sql_table)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $connection = mysqli_connect($_GLOBALS['db_params']['server_name'],
        $_GLOBALS['db_params']['db_user_name'],
        $_GLOBALS['db_params']['db_password'],
        $_GLOBALS['db_params']['db_name']
    );

    if (!$connection) {
        die("Ошибка подключения к БД: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($connection, "SELECT * FROM ?");
    mysqli_stmt_bind_param($stmt, 's', $sql_table);

    mysqli_stmt_execute($stmt);


    // $result = mysqli_query($connection, $sql);

    // return mysqli_fetch_assoc($result);
    // mysqli_close($conn);
}

function read_row()
{
    // todo
}

function render_page($content_template = '', $data = [])
{
    $base_file = __DIR__ . '/../templates/base.php';
   
    if (file_exists($base_file)) {

        echo 'ok<br>';
        exit;
        
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


