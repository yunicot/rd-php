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

foreach ($routes as $routeUri => $route) {
    $routeUri = addcslashes($routeUri, '/');
    preg_match("/^$routeUri$/", $uri, $params);
    if (count($params) > 0) {
        $controller = new $route[$method]['controller'];
        $controllerMethod = $route[$method]['method'];
        $response = $controller->$controllerMethod($params);
//        $response = $controller->$controllerMethod(
//            ...array_filter($params, fn($key) => !is_int($key), ARRAY_FILTER_USE_KEY)
//        );
        break;
    }
}

echo $response;