<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'], 
    'password' => $_POST['password']
]);

    
$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password'], );


if(!$signedIn){
    $form -> error('password', 'This email address or password is incorrect.')->throw();

}
redirect('/');








