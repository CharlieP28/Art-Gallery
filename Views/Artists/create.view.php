
<?php require base_path("Views/Partials/head.php")?>
<?php require base_path("Views/Partials/nav.php")?>
<?php require base_path("Views/Partials/banner.php")?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method = "post" action = "/Artist">
        <input type = "text" name = "name" placeholder = "Enter the artists name:" class = "w-[250px] rounded mb-6">
        <button type="submit" class = "bg-orange-700 text-gray-300 w-[100px] rounded-md px-2 text-sm font-medium hover:bg-orange-500 hover:text-white rounded-md px-2 py-1 text-sm font-medium">Submit</button>
    </form>
  </div>
</main>

<?php require base_path("Views/Partials/foot.php")?>