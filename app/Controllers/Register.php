<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Register extends BaseController
{
    public function register()
    {
        helper(['register', 'url']);
        if (!$this->validate([
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[10]'],
        ])) {
            return view('pages/'."register", [
                'validation' => $this->validator,
            ]);
        }

        $db = db_connect();
        $uname = $this->request->getVar("username");
        $pass = md5($this->request->getVar("password"));

        $sql = 'INSERT INTO user (username, password) VALUES (?, ?)';
        $db->query($sql, [$uname, $pass]);

        // session_start();
        // $_SESSION['username'] = $uname;
        // $_SESSION['password'] = $pass;
        // header("location: login.php");

        $db->close();
        echo "<script>
        alert(Congrats! You are now successfully registered.);
        </script>";
            echo "<script>
                var timer = setTimeout(function() {
                window.location='login'}, 3000);
                </script></h1>";
        // return redirect('login');

        // return view('Success');
    }
}
