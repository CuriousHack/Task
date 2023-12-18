<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>
<div class="emp">
<div class="overlay"></div>
  <div class="content">
    <img src="../img/search.png" alt="Search Icon" width="50" height="50">
    <p>No task found</p>
  </div>
  <a href="/create" class='butt'>New Task</a>
</div>


<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
