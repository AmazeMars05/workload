<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function login()
    {
        // return redirect("register");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = \Config\Database::connect();
            $uname = $_POST["username"];
            $pass = $_POST["password"];

            $sql = "SELECT * FROM user WHERE username=? AND password=?";
            $result = $db->query($sql, [$uname, $pass]);
            if ($result) {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['username'] = $uname;
                return redirect('index');
            }
            else{
                echo "User not registered, or invalid details.";
                return redirect()->back();
            }
        }
    }
}