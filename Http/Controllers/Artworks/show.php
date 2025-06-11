<?php

// use Core\Database;
use Core\App;

$db = App::resolve('Core\Database');

$artwork = $db->query("select * from artworks where id = :id", [
    'id' => $_GET['id']
])->find();

$artist = $db->query("select * from Artists where id = :id", [
    'id'=> $artwork['ArtistId']
])->find();


view("Artworks/show.view.php", [
    'heading' => $artwork['Title'] . " by " . ucwords(strtolower($artist['name'])),
    'artwork' => $artwork
]);

