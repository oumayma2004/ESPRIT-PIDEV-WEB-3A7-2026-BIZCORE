<?php

use App\Kernel;

$sessionPath = dirname(__DIR__).'/var/sessions/native';

if (!is_dir($sessionPath)) {
    mkdir($sessionPath, 0777, true);
}

ini_set('session.save_path', $sessionPath);

foreach (['HTTP_PROXY', 'HTTPS_PROXY', 'ALL_PROXY', 'http_proxy', 'https_proxy', 'all_proxy'] as $proxyEnv) {
    $proxyValue = getenv($proxyEnv);

    if ($proxyValue !== false && str_contains($proxyValue, '127.0.0.1:9')) {
        putenv($proxyEnv);
        unset($_ENV[$proxyEnv], $_SERVER[$proxyEnv]);
    }
}

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
