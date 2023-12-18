<?php

$title = 'Create Task';

$errors = [];

view('tasks/create.view.php', [
    'title' => $title,
    'errors' => $errors
]);