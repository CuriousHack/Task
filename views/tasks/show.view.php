<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');

?>

<div class="container">
        <h1><?= $task['title'] ?></h1>
        <p><?= $task['details'] ?></p>
        

        <button type="submit" class="backbtn"><a href="/task/edit?id=<?= $task['id'] ?>" style="color: white;text-decoration:none">Edit</a></button>
        <button type="submit" class="backbtn"><a href="/tasks" style="color: white;text-decoration:none">All Tasks</a></button>

        <form method="POST" action = "/task">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name = "id"  value = "<?= $task['id'] ?>">
                <button class="cancelbtn" type="submit" href="#">Delete</a></button>
        </form>
</div>

<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
