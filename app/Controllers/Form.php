<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller
{
    public function index()
    {
        helper(['form', 'url']);

        if (!$this->validate([
            'username' => 'required',
            'password' => 'required|min_length[10]',
        ])) {
            return view('login', [
                'validation' => $this->validator,
            ]);
        }

        return view('Success');
    }
}
