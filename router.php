<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/welcomeController.php',
    '/notes' => 'controllers/NotesController.php',
    '/note' => 'controllers/NoteController.php',
    '/about' => 'controllers/AboutController.php',
    '/contact' => 'controllers/ContactController.php',
];

function abort($code = 404)
{
    http_response_code($code);

    require "views/partials/{$code}.php";

    die();
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);

