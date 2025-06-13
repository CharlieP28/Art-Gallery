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

$likes = $db->query("select * from Likes where UserId = :UserId and ArtworkId = :ArtworkId", [
    'UserId' => $_SESSION['user']['id'],
    'ArtworkId' => (int)$_GET['id']
])->findALL();

if(count($likes)){
    $liked = true;
}else{
    $liked = false;
};



$likeCount = count($db->query("select*from Likes")->findALL());


view("Artworks/show.view.php", [
    'heading' => $artwork['Title'] . " by " . ucwords(strtolower($artist['name'])),
    'artwork' => $artwork,
    'liked' => $liked,
    'likeCount' =>$likeCount
]);


