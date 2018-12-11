<?php declare(strict_types=1);

//  default root path
define('DEBUG', true);

// include vendor
include_once __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

$config = \Finance\ConfigLoader::execute(
    [
        __DIR__ . DIRECTORY_SEPARATOR . '../config/env.php',
        __DIR__ . DIRECTORY_SEPARATOR . '../config/main.php',
    ]
);

$routing = __DIR__ . DIRECTORY_SEPARATOR . '../config/routing.yml';

// start application
$app = new \Finance\app\Core\Application(DEBUG, $config, $routing);
$app->Run();