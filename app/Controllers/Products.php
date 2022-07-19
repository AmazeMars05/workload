<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Products extends BaseController
{
    public function add_product()
    {
        helper(['school_list', 'url']);
        if (!$this->validate([
            'pname' => ['label' => 'Product Name', 'rules' => 'required'],
            'category' => ['label' => 'Category', 'rules' => 'required'],            
        ])) {
            return view('pages/' . "school_list", [
                'validation' => $this->validator,
            ]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = db_connect();
            
            $pname = $_POST["pname"];
            $cat = $_POST["category"];            
            $sid = $_POST["sid"];
            $img = $_POST["image"];
            $sql = 'INSERT INTO products ( pname, category, sid, image) VALUES ( ?, ?, ?, ?)';
            $db->query($sql, [ $pname, $cat, $sid, $img]);
            
            return redirect()->back();           
        }
    }
    

}
