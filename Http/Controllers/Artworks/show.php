<?php

// use Core\Database;
use Core\App;

$db = App::resolve('Core\Database');

$artwork = $db->query("select * from artworks where id = :id", [
    'id' => $_GET['id']
])->find();
$artist = $db->query("select name from artists where id = :id", [
    "id" => $artwork['ArtistId']
]) -> find();

view("Artworks/show.view.php", [
    'heading' => $artwork['Title'] . " by " . $artist['name'],
    'artwork' => $artwork
]);

