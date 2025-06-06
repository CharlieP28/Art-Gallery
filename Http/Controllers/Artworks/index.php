<?php

// use Core\Database;
use Core\App;

$db = App::resolve('Core\Database');

$thumbnails = $db->query("select * from artworks")->findAll();

view("Artworks/index.view.php", [
    'heading' => 'Artworks',
    'thumbnails' => $thumbnails
]);

