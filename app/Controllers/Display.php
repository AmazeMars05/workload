<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Display extends BaseController
{
    public function school_display()
    {
        session_start();
        $sid = $_POST["sid"];
        $_SESSION['sid'] = $sid;

        return redirect('buttons');
    }
}
