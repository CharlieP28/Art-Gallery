<?php require base_path("Views/Partials/head.php")?>
<?php require base_path("Views/Partials/nav.php")?>
<?php require base_path("Views/Partials/banner.php")?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div>
        <form method = "post" action = "/Artworks">
            <input type = "text" name = "search" placeholder = "Search" class = "w-[250px] rounded mb-6">
            <button type="submit" class = "bg-orange-700 text-gray-300 w-[100px] rounded-md px-2 text-sm font-medium hover:bg-orange-500 hover:text-white rounded-md px-2 py-1 text-sm font-medium">Submit</button>
        </form>
    </div>
    <ul class = "mt-5">
        <?php foreach ($thumbnails as $thumbnail) : ?>
        <li>
          <div class = "flex flex-col items-start">
            <div>
              <p><?=$thumbnail['Title']?></p>
            </div>
            <div class = "flex flex-align-center">
              <a href="/Artwork?id=<?=$thumbnail['id']?>" class = >
                <img src="/<?=$thumbnail['Thumbnail']?>" alt="Artwork" class ="mb-5">
              </a>
              <p><?=substr($thumbnail['Description'], 0, 10) . '...'?></p>
              
            </div>
          </div>
        </li>
        <?php endforeach ?>
    </ul>
    </div>
</main>

<?php require base_path("Views/Partials/foot.php")?>