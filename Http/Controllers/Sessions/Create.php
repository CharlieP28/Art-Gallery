<?php

use Core\Session;

view('Sessions/create.view.php', [
    'errors' => Session::get('errors', []) 
]);