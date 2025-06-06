<?php

use Core\Validator;
use Core\App;

$db = App::resolve("Core\Database");

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)){
    $errors['email'] = "Please provide a valid email.";
}

if (!Validator::string($password, 7, 255)){
    $errors['password'] = "Please provide a valid password.";
}

if (count($errors)){
    return view("Registration/create.view.php", [
        'errors' => $errors
    ]);
}

$user = $db->query("select * from users where email = :email", [
    'email' => $email
]) -> find();

if (! $user){
    $db->query("INSERT INTO users (password, email) VALUES (:password, :email);", [
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'email' => $email
    ]);
$user = $db->query("select * from users where email = :email;", [
    'email' => $email
]) -> find();

$userId = $user['id'];

    login([
        'email' => $email,
        'id' => $userId
    ]);

    header('location: /');
    die();
} else{
    header('location: /');
    die();
}