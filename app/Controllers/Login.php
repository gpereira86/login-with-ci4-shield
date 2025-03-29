<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        $credentials = [
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        $loginAttempt = auth()->attempt($credentials);

        if (! $loginAttempt->isOK()) {
            return redirect()->back()->with('error', $loginAttempt->reason());
        }
        return redirect()->route('home');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
