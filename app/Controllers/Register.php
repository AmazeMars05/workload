<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends BaseController
{
    public function register()
    {
        helper(['register', 'url']);
        if (!$this->validate([
            'username' => ['A Username is required' => 'Username', 'rules' => 'required'],
            'password' => ['A password of min 10 char is required' => 'Password', 'rules' => 'required|min_length[10]'],
        ])) {
            return view('pages/'."register", [
                'validation' => $this->validator,
            ]);
        }

        $db = \Config\Database::connect();
        $uname = $this->request->getVar("username");
        $pass = $this->request->getVar("password");

        $sql = 'INSERT INTO user (username, password) VALUES (?, ?)';
        $db->query($sql, [$uname, $pass]);

        // session_start();
        // $_SESSION['username'] = $uname;
        // $_SESSION['password'] = $pass;
        // header("location: login.php");

        $db->close();
        return redirect('login');

        // return view('Success');
    }
}
