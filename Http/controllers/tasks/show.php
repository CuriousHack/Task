<?php

use Core\App;
use Core\Session;
use Core\Database;

$db = App::resolve(Database::class);

$current_user_id = $_SESSION['user']['id'];


$task = $db->query("select * from tasks where id = :id",[
    ':id' => $_GET['id']])
    ->find0rfail();

    authorize($task['user_id'] === $current_user_id);

view('tasks/show.view.php', [
    'title' => $task['title'],
    'task' => $task,
    'errors' => Session::get('errors') ?? []
]);
