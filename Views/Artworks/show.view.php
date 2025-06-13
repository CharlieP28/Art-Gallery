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
<div class = "mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center space-x-6">
    <a href = "/Artworks" class = "text-orange-500 hover:underline">Return</a>
    <form method = "post" action = "/Artwork?id=<?=$artwork['id']?>">
        <button type="submit" class="<?= $liked ? 'ring-4 outline-none ring-orange-300' : '' ?>ml-10 text-orange-700 border border-orange-700 hover:bg-orange-700 hover:text-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-orange-500 dark:text-orange-500 dark:hover:text-white dark:ring-orange-800 dark:hover:bg-orange-500">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
        </svg>
        <span class="sr-only">Like Button</span>
        </button>
    </form>
</div>
</main>

<?php require base_path("Views/Partials/foot.php")?>