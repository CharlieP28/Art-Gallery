<?php require base_path("Views/Partials/head.php")?>
<?php require base_path("Views/Partials/nav.php")?>
<?php require base_path("Views/Partials/banner.php")?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <ul>
        <?php foreach ($artworks as $artwork) : ?>
        <li>
            <a href="/Artwork?id=<?=$artwork['id']?>" >
                <?=htmlspecialchars($artwork['Artwork'])?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
    <a href="/Upload" class="bg-orange-800 text-white hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium hover:bg-orange-700 hover:text-white">Upload</a>
  </div>
</main>

<?php require base_path("Views/Partials/foot.php")?>