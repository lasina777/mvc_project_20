<?php

namespace Controllers;

use Models\User;

class UserController extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function registerPost()
    {
        if($_POST['password'] != $_POST['password_confirmed'])
            return header('Location: ?error_password');
        unset($_POST['password_confirmed']);
        $user = new User();
        return $user->get();
        $findUser = $user->create($_POST);
        return var_dump($findUser);
    }
    public function login()
    {
        return view('login');
    }
    public function category()
    {
        return view('category');
    }
    public function post()
    {
        return view('Post');
    }
}