<?php

use Core\Session;

$title = 'Register';

view('users/create.view.php', [
    'title' => $title,
    'errors' => Session::get('errors') ?? []
]);