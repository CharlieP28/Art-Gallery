<?php require base_path("Views/Partials/head.php")?>
<?php require base_path("Views/Partials/nav.php")?>
<?php require base_path("Views/Partials/banner.php")?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-center items-center">
  <img src="/<?=$artwork['Artwork']?>" alt="Artwork">
</div>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-center items-center">
    <?=$artwork['Description']?>
  </div>
  <div class = "mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href = "/Artworks" class = "text-blue-500 hover:underline">Return</a>
</main>

<?php require base_path("Views/Partials/foot.php")?>