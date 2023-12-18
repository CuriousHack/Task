<?php

namespace Core;

use Core\App;
use Core\Database;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)->query("select * from users where email = :email", [
            'email' => $email
        ])->find();
        if ($user) {
            //check if the password supplied is the same as the password in the database
            if (password_verify($password, $user['password'])) {
                $this->login($user);

                return true;
            }
        }
        return false;
    }
    public function registerAttempt($fullname, $username, $email, $password)
    {
        $user = App::resolve(Database::class)->query('select * from users where email = :email or username = :username',[
            'email' => $email,
            'username' => $username
        ])->find();
        if (!$user) {
            //if no account with that email address is found, then register the user
            App::resolve(Database::class)->query('INSERT INTO users(fullname, username, email, password) VALUE(:fullname, :username, :email, :password)',[
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ]);
                return true;
            }
        return false;
    }


    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'fullname' => $user['fullname'],
            'username' => $user['username']
        ];
        session_regenerate_id(true);
    }


    public function logout()
    {
        Session::destroy();
    }
}
