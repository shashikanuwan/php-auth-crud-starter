<?php

global $router;

$router->get('/', 'controllers/welcomeController.php');
$router->get('/about', 'controllers/AboutController.php');
$router->get('/contact', 'controllers/ContactController.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');