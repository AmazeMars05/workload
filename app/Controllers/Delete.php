<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Delete extends BaseController
{
    public function delete()
    {
        

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $db = db_connect();
            $poid = $_GET["poid"];
            
            $sql = 'DELETE FROM products WHERE poid = ?';
            $db->query($sql, [$poid]);
            return redirect('blank_page');           
        }
    }
}
