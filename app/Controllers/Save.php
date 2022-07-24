<?php

namespace App\Controllers;
use App\Models\CustomerModel;
// use CodeIgniter\Controller;

class Save extends BaseController
{
    public function save_data()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $c_model = new CustomerModel();
            $data = [
                'date' => $_POST["date"],
                'cashier_name' => $_POST["cashiername"],
                'cname' => $_POST["cname"],
                'caddress' => $_POST["caddress"],
                'cnumber' => $_POST["cnumber"],
                'products' => $_POST["pname"],
                'sid' => $_POST["sid"],
                'remarks' => $_POST["remarks"],
                'amount' => $_POST["total_amount"],
            ];
            $c_model->insert($data);     
        }
            return redirect('index');
        
    }
}
