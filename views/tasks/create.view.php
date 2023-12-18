<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>

<div class="container">
<div>
  <form class="modal-content animate" action="/store" method="POST">

    <div class="container">
      <label for="title"><b>Title</b></label>
      <input type="text" placeholder="Task Title" id="title" name="title" value ="<?= $_POST['title'] ?? '' ?>" >
        <?php if(isset($errors['title'])) :?>
            <p class="error"><?= $errors['title']; ?></p>
            <?php endif;?>
            <br>
            
      <label for="desc"><b>Description</b></label>
      <textarea type="textarea" name="desc" id="desc" placeholder="Some text"><?= $_POST['desc'] ?? '' ?></textarea>
      <?php if(isset($errors['desc'])) :?>
            <p class="error"><?= $errors['desc']; ?></p>
            <br>
            <?php endif;?>
            <div class="end">
            <button class="cancelbtn"><a href="/">Cancel</a></button>
            <button type="submit">Save</button>
            </div>
    </div>
  </form>
</div>
</div>

<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
