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
        return redirect('login');
    }
}
