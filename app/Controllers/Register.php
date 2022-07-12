<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends Controller
{
    public function register()
    {
        $db = \Config\Database::connect();
        $uname = $this->request->getVar("username");
        $pass = $this->request->getVar("password");
        
        $sql = 'INSERT INTO user (username, password) VALUES (?, ?)';
        $db->query($sql, [$uname, $pass]);
        
        session_start();
        $_SESSION['username'] = $uname;
        $_SESSION['password'] = $pass;
        // header("location: login.php");

        $db->close();
        
        if (!$this->validate([
            'username' => 'required',
            'password' => 'required|min_length[10]',
        ])) {
            return view('login', [
                'validation' => $this->validator,
            ]);
        }

        // return view('Success');
    }

}

