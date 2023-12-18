<?php

use Core\Authenticator;
use Http\Forms\RegisterForm;

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$form = RegisterForm::validate($attributes = [
    'fullname' => $fullname,
    'username' => $username,
    'email' => $email,
    'password' => $password
]);

$signedIn = (new Authenticator)->registerAttempt(
    $attributes['fullname'] = $fullname,
    $attributes['username'] = $username,
    $attributes['email'] = $email,
    $attributes['password'] = $password
);

if (!$signedIn) {
    $form->error(
        'email',
        'Username or Email already Exist'
    )->throw();
}


redirect('/tasks');
