<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

class Stock extends BaseController
{
    public function add_stock()
    {
        helper(['inventory', 'url']);
        if (!$this->validate([
            'pname' => ['label' => 'Product Name', 'rules' => 'required'],
            'size' => ['label' => 'Size', 'rules' => 'required'],
            'price' => ['label' => 'Price', 'rules' => 'required'],
            'quantity' => ['label' => 'Quantity', 'rules' => 'required'],
        ])) {
            return view('pages/' . "inventory", [
                'validation' => $this->validator,
            ]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $p_model = new \App\Models\StockModel();
            $data = [
                'pname' => $_POST["pname"],
                'image' => $this->request->getFile("image"),
                'sid' => $_POST["sid"],
                'quantity' => $_POST["quantity"],
                'size' > $_POST['size'],
                'price' => $_POST["price"],
            ];
            $p_model->insert($data);           
            return redirect()->back();
        }
    }
}
