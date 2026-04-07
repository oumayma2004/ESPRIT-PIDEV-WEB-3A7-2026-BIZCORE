<?php

define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', rtrim(str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']), '/'));

require_once BASE_PATH . '/app/core/App.php';
require_once BASE_PATH . '/app/core/Controller.php';
require_once BASE_PATH . '/app/core/Model.php';

spl_autoload_register(function ($class) {
    $paths = [
        BASE_PATH . '/app/controllers/' . $class . '.php',
        BASE_PATH . '/app/models/' . $class . '.php',
        BASE_PATH . '/app/core/' . $class . '.php',
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});

$app = new App();