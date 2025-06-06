<?php

use Verot\Upload\Upload;

$original = new upload($_FILES['image_field']);

$thumb = new upload($_FILES['image_field']);
use Core\App;

$db = App::resolve('Core\Database');

$artistId = $db->query('select id from artists where Name = :name;', [
    'name' => $_POST['name']
]) -> find();


if ($original -> uploaded){
    $original ->file_new_name_body   = $original -> file_src_name_body . "Original";
    $original ->image_resize         = false;
    $original ->process(base_path('Images/'));
    if (! $original ->processed){
        echo 'error' . $original ->error;
    } else{
        $finalFilename = $original->file_dst_name;
        $finalPathOriginal = 'Images/' . $finalFilename;


        
    }
    
};

if($thumb -> uploaded){
    $thumb->file_new_name_body   = $thumb -> file_src_name_body . "Thumbnail";
    $thumb->image_resize         = true;
    $thumb->image_x              = 100;
    $thumb->image_ratio_y        = true;
    $thumb->process(base_path('Images/'));
    if ($thumb->processed){
        $thumb->clean();
        $finalFilename = $thumb->file_dst_name;
        $finalPath = 'Images/' . $finalFilename;

        $db -> query("insert into Artworks ('Artwork', 'Thumbnail', 'Description', 'Title', 'ArtistId') VALUES (:Artwork, :Thumbnail, :Description, :Title, :ArtistId);", [
            "Artwork" => $finalPathOriginal,
            "Thumbnail" => $finalPathThumbnail,
            "Description" => $_POST['description'],
            "Title" => $_POST['title'],
            "ArtistId" => $artistId
        ]);
    } else{
        echo 'error' . $thumb->error;
    }
}; 

header('location: /Upload');
exit();