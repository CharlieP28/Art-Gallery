<?php

// return  [
//     '/' => "index.php",
//     '/About' => "about.php",
//     '/Notes' => "notes/index.php",
//     '/Note' => "notes/show.php",
//     '/Contact' => "contact.php",
//     '/Notes/Create' => "notes/create.php"
// ];

$router->get('/', 'index.php');
$router->get('/About', 'about.php');
$router->get('/Contact', 'contact.php');

$router->get('/Register', 'Registration/create.php')->only('guest');
$router->post('/Register', 'Registration/store.php');

$router->get('/Login', 'Sessions/create.php')->only('guest');
$router->post('/Sessions', 'Sessions/store.php')->only('guest');

$router->delete('/Sessions', 'Sessions/destroy.php')->only('auth');

$router->get('/Artworks', 'Artworks/index.php')->only('auth');
$router->get('/Artwork', 'Artworks/show.php')->only('auth');

$router->get('/Upload', 'Artworks/create.php')->only('auth');
$router->post('/Upload', 'Artworks/upload.php')->only('auth');



