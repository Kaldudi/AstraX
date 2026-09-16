<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() === 'POST' || $this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if ($email === 'albertfedlyano@gmail.com' && $password === '12345678') {
                session()->set('isLoggedIn', true);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Email atau kata sandi salah.');
            }
        }
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
