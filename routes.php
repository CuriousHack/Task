<?php

//landing page

$router->get('/', 'index.php')->only('guest');

//routing task related controllers

$router->get('/tasks', 'tasks/index.php')->only('auth');
$router->get('/task', 'tasks/show.php')->only('auth');
$router->delete('/task', 'tasks/destroy.php')->only('auth');

$router->get('/create', 'tasks/create.php')->only('auth');
$router->post('/store', 'tasks/store.php')->only('auth');

$router->get('/task/edit', 'tasks/edit.php')->only('auth');
$router->patch('/task', 'tasks/update.php')->only('auth');

//routing user related controllers

$router->get('/register', 'users/create.php')->only('guest');
$router->post('/register', 'users/store.php');


$router->get('/login', 'users/login.php')->only('guest');
$router->post('/login', 'users/retrieve.php');

$router->get('/logout', 'users/destroy.php')->only('auth');





