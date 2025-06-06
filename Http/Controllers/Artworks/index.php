<?php

// use Core\Database;
use Core\App;

$db = App::resolve('Core\Database');

$artworks = $db->query("select * from artworks")->findAll();

view("Artworks/index.view.php", [
    'heading' => 'Artworks',
    'artworks' => $artworks
]);

