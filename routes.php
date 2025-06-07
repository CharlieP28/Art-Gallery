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
$router->post('/ArtistRegistration', 'Registration/ArtistRegistration/store.php')->only('guest');

$router->get('/Login', 'Sessions/create.php')->only('guest');
$router->post('/Sessions', 'Sessions/store.php')->only('guest');

$router->delete('/Sessions', 'Sessions/destroy.php')->only('user');

$router->get('/Artworks', 'Artworks/index.php')->only('user');
$router->get('/Artwork', 'Artworks/show.php')->only('user');

$router->get('/Upload', 'Artworks/create.php')->only('artist');
$router->post('/Upload', 'Artworks/upload.php')->only('artist');

$router->get('/Artist', 'Artists/create.php')->only('guest');

$router ->get('/Dashboard', 'Dashboard/index.php') ->only('artist');
$router->get('/DashboardArtwork', 'Dashboard/show.php') ->only('artist');
$router->get('/DashboardEdit', 'Dashboard/edit.php') ->only('artist');
$router->post('/DashboardEdit', 'Dashboard/store.php') ->only('artist');
$router->delete('/DashboardEdit', 'Dashboard/destroy.php') ->only('artist');


