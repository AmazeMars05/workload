<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Logout extends BaseController
{
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        // if ($_SESSION['username'] == null) {
        //     header("Location: login");
        //     echo "<a href=login>Click here to login</a>";
        // } else {
            return redirect('login');
        // }
    }
}
