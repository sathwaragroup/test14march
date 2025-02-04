<?php

if (session_status() == PHP_SESSION_NONE) {  session_start(); }

// Load Configuration

$config = require_once '../config.php';
$base_url = rtrim(BASE_URL, '/');

// Autoload classes
spl_autoload_register(function ($class) {
    include_once "../app/controllers/$class.php";
});

// Load Routes
$routes = require_once '../routes/web.php';

// Get Current URI
$requestUri = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$requestUri = str_replace($base_url, '', $requestUri); // Remove base URL

$requestUri = strtok($requestUri, '?');

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
