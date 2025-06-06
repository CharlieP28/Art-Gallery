<?php require base_path("Views/Partials/head.php")?>
<?php require base_path("Views/Partials/nav.php")?>
<?php require base_path("Views/Partials/banner.php")?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form enctype="multipart/form-data" method="post" action="/Upload">
        <input type="text" name = "Title" placeholder = "Enter the piece's title:">
        <input type="file" size="32" name="image_field" value="" >
        <input type="text" name = "Description" placeholder = "Enter the piece's description:">
        <input type="submit" name="Submit" value="upload"class = "bg-orange-700 text-gray-300 rounded-md px-3 py-2 text-sm font-medium hover:bg-orange-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
    </form>
  </div>
</main>

<?php require base_path("Views/Partials/foot.php")?>