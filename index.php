<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/bootstrap.php';

$routes = array_merge(
    include(__DIR__ . '/routes/api.php'),
    include(__DIR__ . '/routes/web.php'),
);


$uri = $_SERVER['PATH_INFO'] ?? '/';
$method = mb_strtolower($_SERVER['REQUEST_METHOD']);

$response = null;

if (isset($routes[$uri][$method])) {
    $controller = new $routes[$uri][$method]['controller'];
    $controllerMethod = $routes[$uri][$method]['method'];
    $response = $controller->$controllerMethod();
}
echo $response;