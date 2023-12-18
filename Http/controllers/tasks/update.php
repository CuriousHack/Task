<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$current_user_id = $_SESSION['user']['id'];

//find the corresponding task

$task = $db->query("select * from tasks where id = :id", [
    ':id' => $_POST['id']
])->find0rfail();

//authorize that the user can edit the task
authorize($task['user_id'] === $current_user_id);

//validate the user input

$errors = [];

if (! Validator::string($_POST['title'], 1, 50)) {
    $errors['title'] = 'Task Title of no more than 50 characters is required';
}
if (! Validator::string($_POST['desc'], 1, 1000)) {
    $errors['desc'] = 'Task Description of no more than 1000 characters is required';
}

//check if there is validation error
if (count($errors)){
    return view('tasks/edit.view.php',[
        'errors' => $errors,
        'task' => $task
    ]);
}
//update the task in the database if there are no errors
$db->query('update tasks set title = :title, details = :details where id = :id',[
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'details' =>$_POST['desc']
]);

//redirect the user to all task if query is successful

redirect('/tasks');
die();