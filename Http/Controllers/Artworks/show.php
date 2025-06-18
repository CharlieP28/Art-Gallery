<?php

// use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve('Core\Database');

$id = $_GET['id'] ?? Session::get('id');
Session::unflash();

$artwork = $db->query("select * from artworks where id = :id", [
    'id' => $id
])->find();

$artist = $db->query("select * from Artists where id = :id", [
    'id'=> $artwork['ArtistId']
])->find();

$likes = $db->query("select * from Likes where UserId = :UserId and ArtworkId = :ArtworkId", [
    'UserId' => $_SESSION['user']['id'],
    'ArtworkId' => $id
])->findALL();

if(count($likes)){
    $liked = true;
}else{
    $liked = false;
};

$likeCount = count($db->query("select*from Likes where ArtworkId = :ArtworkId", [
    'ArtworkId' => $id
])->findALL());

$comments = $db -> query("select * from comments where ArtworkId = :ArtworkId", [
    "ArtworkId" => $id
]) -> findALL();

view("Artworks/show.view.php", [
    'heading' => $artwork['Title'] . " by " . ucwords(strtolower($artist['name'])),
    'artwork' => $artwork,
    'liked' => $liked,
    'likeCount' =>$likeCount,
    'comments' => $comments
]);


