<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>

<header class="hero-container">
    <div class="hero">
      <section class="hero-left">
        <h1>Taskit: Elevate Your Productivity to New Heights!</h1>
        <p>
        Revolutionize your daily tasks with Taskit—the ultimate productivity companion. Get ready to supercharge your efficiency and make every moment count!        </p>

        <a href="/login">Login</a>
        <a href="/register">Register</a>
      </section>

      <section class="right">
        <img src="../img/taskit.png" alt="Taskit illustration" />
      </section>
    </div>
  </header>

  <?php
require base_path('views/partials/script.php');
require base_path('views/partials/footer.php');
?>
