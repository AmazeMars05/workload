<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Login extends BaseController
{
    public function login()
    {
        $this->check_data();
        helper(['login', 'url']);
        if (!$this->validate([
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[10]'],
        ])) {
            return view('pages/' . "login", [
                'validation' => $this->validator,
            ]);
        }
        // return redirect("register");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = db_connect();
            $uname = $_POST["username"];
            $pass = md5($_POST["password"]);

            // $query = $this->$userModel->find(//);
            $sql = "SELECT * FROM user WHERE username=? AND password=?";
            $result = $db->query($sql, [$uname, $pass]);
            if ($result) {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['username'] = $uname;
                return redirect('index');
            } else {
                echo "User not registered, or invalid details.";
                return redirect()->back();
            }
        }
    }
}
