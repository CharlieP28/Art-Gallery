<?php

use Core\App;

$db = App::resolve('Core\Database');

$db->query("INSERT INTO Artists (`name`)VALUES (:ArtistName);", [
            'ArtistName' => ucwords(strtolower($_POST['name']))
        ]);

header('location:/Artworks');
exit();