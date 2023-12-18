<?php
use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$tasks = $db->query("select * from tasks where user_id = :id",[
    'id' => $_SESSION['user']['id']
])->get();

if(empty($tasks)){
    view('tasks/empty.view.php');
    exit();
}

view('tasks/index.view.php', [
    'tasks' => $tasks
]);

?>