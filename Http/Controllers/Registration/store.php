<?php

if($_POST['accountType'] === "Artist"){
    require(base_path("Http/Controllers/Artists/create.php"));
} else{
    require(base_path("Http/Controllers/Registration/UserRegistration/store.php"));
};