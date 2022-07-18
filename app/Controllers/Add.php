<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Add extends BaseController
{
    public function add()
    {
        helper(['buttons', 'url']);
        if (!$this->validate([
            'pname' => ['label' => 'Product Name', 'rules' => 'required'],
            'category' => ['label' => 'Category', 'rules' => 'required'],            
        ])) {
            return view('pages/' . "buttons", [
                'validation' => $this->validator,
            ]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = db_connect();
            
            $pname = $_POST["pname"];
            $cat = $_POST["category"];            
            $sid = $_POST["sid"];
            $sql = 'INSERT INTO products ( pname, category, sid) VALUES ( ?, ?, ?)';
            $db->query($sql, [ $pname, $cat, $sid]);
            return redirect()->back();           
        }
    }
    public function stock()
    {
        helper(['basic_table', 'url']);
        if (!$this->validate([
            'pname' => ['label' => 'Product Name', 'rules' => 'required'],
            'size' => ['label' => 'Size', 'rules' => 'required'],
            'category' => ['label' => 'Category', 'rules' => 'required'],
            'quantity' => ['label' => 'Quantity', 'rules' => 'required'],
        ])) {
            return view('pages/' . "basic_table", [
                'validation' => $this->validator,
            ]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = db_connect();
            
            $pname = $_POST["pname"];
            $cat = $_POST["category"];            
            $sid = $_POST["sid"];
            $qty = $_POST["quantity"];
            $size = $_POST["size"];
            $sql = 'INSERT INTO stock ( pname, category, sid, size, quantity) VALUES ( ?, ?, ?, ?, ?)';
            $db->query($sql, [ $pname, $cat, $sid, $size, $qty]);
            return redirect()->back();           
        }
    }
}
