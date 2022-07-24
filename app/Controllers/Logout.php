<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Logout extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return redirect('login');
    }
}
