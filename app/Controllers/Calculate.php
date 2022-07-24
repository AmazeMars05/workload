<?php

namespace App\Controllers;
use App\Models\SchoolModel;
use App\Models\StockModel;
// use CodeIgniter\Controller;

class Calculate extends BaseController
{
    public function calculate()
    {
        helper(['blank_page', 'url']);
        if (!$this->validate([
            'pname' => ['label' => 'Product Name', 'rules' => 'required'],
            'size' => ['label' => 'Size', 'rules' => 'required'],
            'qty' => ['label' => 'Quantity', 'rules' => 'required'],
        ])) {
            return view('pages/' . "blank_page", [
                'validation' => $this->validator,
            ]);
        }

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $p_model = new StockModel();
            $pname = $_POST["pname"];
            $sid = $_POST["sid"];
            
            $size = $_POST['size'];
            $multi = array('sid' => $sid, 'pname' => $pname, 'size' => $size );
            $val = $p_model->asArray()->where($multi)->findAll();
            


            return view('pages/' . "blank_page",['val' => $val]);
        
    }
}
