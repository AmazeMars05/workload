<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Delete extends BaseController
{
    public function delete()
    {
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = db_connect();
            $poid = $_POST["poid"];
            
            $sql = 'DELETE FROM products WHERE poid = ?';
            $db->query($sql, [$poid]);
            return redirect()->back();
        }
    }
}
