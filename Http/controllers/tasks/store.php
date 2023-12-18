<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['title'], 1, 50)) {
    $errors['title'] = 'Task Title of no more than 50 characters is required';
}
if (! Validator::string($_POST['desc'], 1, 1000)) {
    $errors['desc'] = 'Task Description of no more than 1000 characters is required';
}


if (! empty($errors)) {
    return view('tasks/create.view.php', [
        //'title' => $title,
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO tasks(title, details, user_id) VALUES(:title,:details, :id)', [
    'title' => $_POST['title'],
    'details' => $_POST['desc'],
    'id' => $_SESSION['user']['id']
]);
redirect('/tasks');

