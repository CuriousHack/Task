<?php 
require base_path('views/partials/head.php');
?>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
			
      <?php $new = str_split($wildcard); ?>
        <h1><?=$new[0] ?><span><?=$new[1] ?></span><?=$new[2]?></h1>
        </div>
      <p><?=$message ?>
			<a href="/tasks">home page</a>
		</div>
	</div>

  <?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>

