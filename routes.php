<?php

global $router;

$router->get('/', 'welcomeController.php');
$router->get('/about', 'AboutController.php');
$router->get('/contact', 'ContactController.php');

$router->get('/notes', 'notes/index.php')->middleware('auth');
$router->get('/note', 'notes/show.php')->middleware('auth');
$router->delete('/note', 'notes/destroy.php')->middleware('auth');

$router->get('/note/edit', 'notes/edit.php')->middleware('auth');
$router->patch('/note', 'notes/update.php')->middleware('auth');

$router->get('/notes/create', 'notes/create.php')->middleware('auth');
$router->post('/notes', 'notes/store.php')->middleware('auth');

$router->get('/register', 'auth/register/create.php')->middleware('guest');
$router->post('/register', 'auth/register/store.php')->middleware('guest');

$router->get('/login', 'auth/login/login.php')->middleware('guest');
$router->post('/login', 'auth/login/store.php')->middleware('guest');
$router->delete('/logout', 'auth/logout/destroy.php')->middleware('auth');