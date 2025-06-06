<?php

namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class LoginForm{

    protected $errors = [];

    public function __construct(public array $attributes){
        $errors = [];
        if (!Validator::email($attributes['email'])){
            $errors['email'] = "Please provide a valid email.";
        }

        if (!Validator::string($attributes['password'])){
            $errors['password'] = "Please provide a valid password.";
        }
        $this ->errors = $errors;
        
    }

    public static function validate($attributes){
        $instance = new static($attributes);


        return $instance->failed() ? $instance->throw() : $instance;

    }

    public function throw(){
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed(){
        return count($this->errors);
    }

    public function error($field, $message){
        $this -> errors[$field] = $message;

        return $this;

    }

    public function errors(){
        return $this -> errors;
    }
}