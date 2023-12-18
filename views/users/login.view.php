<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>
<section class="login-section">
<div class="login-container">
  <form action="/login" method="POST"> 
     <div class="title">Login</div> 
        <div class="input-box underline"> 
          <input type="email" placeholder="Email" name="email" required value ="<?= old('email'); ?>">
          <div class="underline"></div> 
        </div>
        <div class="input-box"> 
          <input type="password" placeholder="Password" name="password" required>
          <?php if(isset($errors['email'])) :?>
            <p class="error"><?= $errors['email']; ?></p>
            <?php endif;?>
          <div class="underline"></div> 
        </div> 
        <div class="input-box button"> 
          <input type="submit" name="" value="Login"> 
        </div> 
  </form> 
    <div class="option">Don't have an account? <a href="/register" style="text-decoration: none; color:#010c80">Register</a></div>
</div>
</section>

<?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
