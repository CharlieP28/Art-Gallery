<nav class="bg-orange-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=orange&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-orange-900 text-white", Default: "text-gray-300 hover:bg-orange-700 hover:text-white" -->
                <a href="/" class="<?= url("/") ? 'bg-orange-900 text-white' :  'text-gray-300'?> hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium " aria-current="page">Home</a>
                <?php if($_SESSION['user'] ?? false) : ?>
                  <a href="/Artworks" class="<?= url("/Artworks") ? 'bg-orange-900 text-white' :  'text-gray-300'?> hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium " aria-current="page">Artworks</a>
                  <a href="/Artists" class="<?= url("/Artists") ? 'bg-orange-900 text-white' :  'text-gray-300'?> hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium " aria-current="page">Artists</a>
                  <?php endif ; ?> 
                <?php if ($_SESSION['user']['name'] ?? false) : ?>
                  <a href="/Dashboard" class="<?= url("/Dashboard") ? 'bg-orange-900 text-white' :  'text-gray-300'?> hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium " aria-current="page">Artists Dashboard</a>
                <?php endif ?>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-orange-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-orange-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                </button>
                <?php if($_SESSION['user'] ?? false) : ?>
                <?php else : ?>
                  <a href="/Register" class="<?= url("/Register") ? 'bg-orange-900 text-white' :  'text-gray-300'?> hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium hover:bg-orange-700 hover:text-white">Register</a>
                  <a href="/Login" class="<?= url("/Login") ? 'bg-orange-900 text-white' :  'text-gray-300'?> hover:bg-orange-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium hover:bg-orange-700 hover:text-white">Log In</a>
                  <?php endif; ?>
              </div>
            </div>
            <?php if ($_SESSION['user'] ?? false) : ?>
              <div class = 'ml-3'>
                <form action = "/Sessions" method = "POST">
                  <input type = "hidden" name = "_method" value = "DELETE">
                  <button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm/6 font-semibold text-gray-300 shadow-xs hover:bg-orange-700 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log Out</button>
                </form>              
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-orange-800 p-2 text-gray-400 hover:bg-orange-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-orange-900 text-white", Default: "text-gray-300 hover:bg-orange-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-orange-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/About.php" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-orange-700 hover:text-white">About Us</a>
        <a href="/Contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-orange-700 hover:text-white">Contact</a>
      </div>
      <div class="border-t border-orange-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-orange-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800 focus:outline-hidden">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-orange-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-orange-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-orange-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>