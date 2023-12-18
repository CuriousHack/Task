<?php

use Core\Session;

$title = 'Create Task';

view('tasks/create.view.php', [
    'title' => $title,
    'errors' => Session::get('errors') ?? []
]);