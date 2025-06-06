<?php require "Partials/head.php"?>
<?php require "Partials/nav.php"?>
<?php require "Partials/banner.php"?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php if ($_SESSION['user'] ?? false) : ?>
      <p>Hello <?= $_SESSION['user']['name'] ?? $_SESSION['user']['email']?>, you are on the Home Page!</p>
    <?php else : ?>
      <p>Hello Guest, you are on the Home Page!</p>
    <?php endif; ?>
  </div>
</main>

  <?php require "Partials/foot.php"?>