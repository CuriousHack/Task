<?php

use Core\Session;

$title = 'Login';


view('users/login.view.php', [
    'title' => $title,
    'errors' => Session::get('errors') ?? []
]);