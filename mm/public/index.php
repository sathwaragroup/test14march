<?php

// Load Configuration
$config = require_once '../app/config.php';
$base_url = rtrim($config['base_url'], '/');

// Autoload classes
spl_autoload_register(function ($class) {
    include_once "../app/controllers/$class.php";
});

// Load Routes
$routes = require_once '../app/routes.php';

// Get Current URI
$requestUri = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$requestUri = str_replace($base_url, '', $requestUri); // Remove base URL

// Route Matching
if (array_key_exists($requestUri, $routes)) {
    list($controller, $method) = explode('@', $routes[$requestUri]);

    if (class_exists($controller) && method_exists($controller, $method)) {
        $obj = new $controller();
        $obj->$method();
    } else {
        http_response_code(404);
        echo "Controller or method not found.";
    }
} else {
    http_response_code(404);
    echo "Route not found.";
}
