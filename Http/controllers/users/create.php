<?php

$title = 'Register';

$errors = [];

view('users/create.view.php', [
    'title' => $title,
    'errors' => $errors
]);