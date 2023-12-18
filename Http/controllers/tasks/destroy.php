<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$current_user_id = $_SESSION['user']['id'];

    $task = $db->query("select * from tasks where id = :id",[
        ':id' => $_POST['id']])
        ->find0rfail();
    
        authorize($task['user_id'] === $current_user_id);

    $db->query('delete from tasks where id = :id',[
    ':id' => $_POST['id']]);

    header('location: /tasks');
