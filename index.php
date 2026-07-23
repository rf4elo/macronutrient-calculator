<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];


$routes = [
    'GET' => [
        '/' => 'pages/main.php',
    ],
    'POST' => [
        '/results' => 'pages/results.php',
    ]
];


if(isset($routes[$method][$uri])) {
    $file = $routes[$method][$uri];

    if(file_exists($file)) {
        require $file;
    } else {
        http_response_code(500);
        echo "Internal server error.";
    }
} else {
    http_response_code(404);
    require "pages/404.php";
}

?>