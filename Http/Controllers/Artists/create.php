<?php


view("Artists/create.view.php", [
    'heading' => 'Add your details',
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);