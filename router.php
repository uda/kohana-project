<?php
/**
 * router.php
 *
 * Use this file as a router for testing locally, for example:
 *      php -S 127.0.0.1:80 router.php
 */

if (php_sapi_name() == 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ($path[0] == '/') {
        $path = substr($path, 1);
    }
    if (!is_file($path) && !is_dir($path)) {
        require 'index.php';
    } else {
        return false;
    }
}
return true;