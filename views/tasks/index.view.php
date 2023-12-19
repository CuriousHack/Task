<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>
<h2>Tasks <?= $_SESSION['user']['username'] ?? 'GUEST'; ?></h2>

 

<ul>
<?php foreach($tasks as $task) : ?>
  <li class="<?= ($task['is_checked'] === 1) ? "checked" : ""; ?>">
        <a class="alink" href="/task?id=<?= $task['id'] ?? ''?>"><?= htmlspecialchars($task['title']) ?></a>
      </li>
        <?php endforeach; ?>
</ul>

<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>