<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');

?>
<section class="login-section">
<div class="login-container">
  <form action="/register" method="POST"> 
  <div class="title">Register</div> 
        <div class="input-box underline"> 
          <input type="text" placeholder="Fullname" name = "fullname" required value ="<?= old('fullname'); ?>"> 
          <?php if(isset($errors['fullname'])) :?>
            <p class="error"><?= $errors['fullname']; ?></p>
            <?php endif;?>
          <div class="underline"></div> 
        </div>
        <div class="input-box underline"> 
          <input type="text" placeholder="Username" name="username" required value ="<?= old('username'); ?>">
          <?php if(isset($errors['username'])) :?>
            <p class="error"><?= $errors['username']; ?></p>
            <?php endif;?> 
          <div class="underline"></div> 
        </div>
        <div class="input-box underline"> 
          <input type="email" placeholder="Email" name="email" required value ="<?= old('email'); ?>">
          <?php if(isset($errors['email'])) :?>
            <p class="error"><?= $errors['email']; ?></p>
            <?php endif;?> 
          <div class="underline"></div> 
        </div>
        <div class="input-box"> 
          <input type="password" placeholder="Password" name="password" required>
          <?php if(isset($errors['password'])) :?>
            <p class="error"><?= $errors['password']; ?></p>
            <?php endif;?> 
          <div class="underline"></div> 
        </div> 
        <div class="input-box button"> 
          <input type="submit" name="" value="Register"> 
        </div> 
  </form> 
    <div class="option">already have an account? <a href="/login" style="text-decoration: none; color:#010c80">Login</a></div>
</div>
</section>

<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
