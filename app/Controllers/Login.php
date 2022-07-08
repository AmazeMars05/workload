<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        var_dump($this->request->getVar("password"));
        // $this->input->get("password");

        // helper(['form', 'url']);

        // if (!$this->validate([
        //     'username' => 'required',
        //     'password' => 'required|min_length[10]',
        // ])) {
        //     return view('login', [
        //         'validation' => $this->validator,
        //     ]);
        // }

        // return view('Success');
    }

}

