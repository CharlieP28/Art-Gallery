<?php

$_SESSION['name'] = "Charlie Proud";

view("index.view.php", [
    'heading' => 'Home'
]);