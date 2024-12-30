<?php

global $router;

$router->get('/', 'controllers/welcomeController.php');
$router->get('/about', 'controllers/AboutController.php');
$router->get('/contact', 'controllers/ContactController.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');

$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

$router->get('/register', 'controllers/auth/register/create.php');
$router->post('/register', 'controllers/auth/register/store.php');

$router->get('/login', 'controllers/auth/login/login.php');
$router->post('/login', 'controllers/auth/store.php');