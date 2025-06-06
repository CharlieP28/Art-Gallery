<?php

if($_POST['accountType'] === "Artist"){
    require(base_path("Http/Controllers/Sessions/ArtistSessions/store.php"));
} else{
    require(base_path("Http/Controllers/Sessions/UserSessions/store.php"));
};