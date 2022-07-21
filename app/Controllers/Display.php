<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Display extends BaseController
{
    public function school_display()
    {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {            
            $sid = $_POST["sid"];
            $session = session();
            $session->set('sid', $sid);
        }
        return redirect()->back();
    }
    public function add_school()
    {
        helper(['school-list', 'url']);
        if (!$this->validate([
            'sname' => ['label' => 'School Name', 'rules' => 'required'],
        ])) {
            return view('pages/' . "school-list", [
                'validation' => $this->validator,
            ]);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sclmdl = new \App\Models\SchoolModel();
            $sname = [
                'name' => $_POST["sname"],
            ];
            $sclmdl->insert($sname);
        }
        return redirect()->back();
    }
}
