<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>

<div class="container">
<div>
  <form class="modal-content animate" action="/task" method="POST">

    <div class="container">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $task['id']; ?>">
      <label for="title"><b>Title</b></label>
      <input type="text" placeholder="Task Title" id="title" name="title" value ="<?= $task['title'] ?>" >
        <?php if(isset($errors['title'])) :?>
            <p class="error"><?= $errors['title']; ?></p>
            <?php endif;?>
            <br>
      <label for="desc"><b>Description</b></label>
      <textarea type="textarea" name="desc" id="desc" placeholder="Some text"><?= $task['details'] ?></textarea>
      <?php if(isset($errors['desc'])) :?>
            <p class="error"><?= $errors['desc']; ?></p>
            <?php endif;?>
            <br>
      <div class="end">
        <button type="submit" class="cancelbtn"><a href="/tasks">Cancel</a></button>
        <button type="submit">Update</button>
      </div>
    </div>
  </form>
</div>
</div>

<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
