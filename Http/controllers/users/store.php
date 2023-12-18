<?php

use Core\Authenticator;
use Http\Forms\RegisterForm;

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//validate the user input

// $errors = [];

// if (! Validator::string($fullname, 3, 50)){
//     $errors['fullname'] = "Please insert a valid Fullname.";
// }
// if (! Validator::string($username, 3, 50)){
//     $errors['username'] = "Please insert a valid username.";
// }
// if (! Validator::email($email)){
//     $errors['email'] = "Please provide a valid email address.";
// }
// if (! Validator::string($password, 7, 255)){
//     $errors['password'] = "Please provide a password of at least 7 characters.";
// }
// if (!empty($errors)){
//     return view('users/create.view.php',[
//         'errors' => $errors,
//         'title' => 'Register'
//     ]);
// }

$form = RegisterForm::validate($attributes = [
    'fullname' => $fullname,
    'username' => $username,
    'email' => $email,
    'password' => $password
]);





//check if user already exist

// $user = $db->query('select * from users where email = :email or username = :username',[
//     'email' => $email,
//     'username' => $username
// ])->find();

// if ($user){
//     //someone with this email address already exist
//     //if yes, redireect to login page
//     header('location: /login');
//     exit();

// }else{
//     //if not, store one into the database and log the user in and redirect
//     $db->query('INSERT INTO users(fullname, username, email, password) VALUE(:fullname, :username, :email, :password)',[
//         'fullname' => $fullname,
//         'username' => $username,
//         'email' => $email,
//         'password' => password_hash($password, PASSWORD_BCRYPT)
//     ]);

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
