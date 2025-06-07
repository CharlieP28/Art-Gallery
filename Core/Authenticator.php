<?php

namespace Core;

use Core\Session;

class Authenticator{

    public function attempt($email, $password, $AccountType){
        $user = App::resolve('Core\Database') -> query("select * from users where email = :email", [
            'email' => $email
        ]) -> find();
        $userId = $user['id'];
        if ($user){
            if (password_verify($password, $user['password'])){
                $this -> login([
                    'email' => $email,
                    'id' => $userId
                ]);
                if($AccountType = $user['accountType']){
                    return true;
                }
                return false;
            }
        }

        return false;
    }

    public function login($user){
        $_SESSION['user'] = [
            'email' => $user['email'],
            'id' => $user['id']
        ];

        session_regenerate_id(true);
    }

    public function loginArtist($ArtistName){
        $_SESSION['user']['name'] = $ArtistName;
    }
    
    public function logout(){
        Session::flush();

        Session::destroy();
    
    }
}