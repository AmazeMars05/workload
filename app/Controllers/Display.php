<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Display extends BaseController
{
    public function school_display()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // if (!isset($_SESSION)) {
                // session_start();
            // }
            $sid = $_POST["sid"];
            // $_SESSION['sid'] = $sid;
            $session = session();
            $session->set('sid', $sid);
            echo $session->get('sid');
            die();
            // echo $_SESSION['sid'];  
        }
        return redirect()->back();
    }
    public function add_school()
    {
        helper(['school_list', 'url']);
        if (!$this->validate([
            'sname' => ['label' => 'School Name', 'rules' => 'required'],            
        ])) {
            return view('pages/' . "school_list", [
                'validation' => $this->validator,
            ]);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sclmdl = new \App\Models\SchoolModel();
            $sname = [
                'name' => $_POST["sname"],];
            $sclmdl->insert($sname);
        }
        return redirect()->back();
    }
}
