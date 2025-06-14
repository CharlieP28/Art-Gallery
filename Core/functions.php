<?php

use Core\Response;
use Core\Session;

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function url($value){
    return $_SERVER["REQUEST_URI"] === $value;
}

function abort($code = 404){
    http_response_code($code);
    
    require base_path("Views/{$code}.php");
    
    die();
}

function authorise($condition, $status = Response::FORBIDDEN){
    if (! $condition){
        abort($status);
    };
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract ($attributes);
    require base_path('Views/'. $path);
}

function redirect($path){
    header("location: {$path}");
    die();
}

function old($key, $default = ''){
    return Session::get('old')[$key] ?? $default;
}