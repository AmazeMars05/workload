<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Delete extends BaseController
{
    public function delete_product()
    {        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new \App\Models\StockModel();
            $sku = $_POST["sku"];
            
            $db->where('sku', $sku)->delete();            
            return redirect()->back();
        }
    }
    public function delete_school()
    {        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sclmdl = new \App\Models\SchoolModel();
            
            $sid = $_POST["sid"];
            
            
            $sclmdl->where('sid', $sid)->delete();
            return redirect()->back();
        }
    }
}
