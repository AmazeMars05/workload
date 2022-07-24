<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table      = 'customers';
    protected $primaryKey = 'billno';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        'date' ,
        'cashier_name' ,
        'cname' ,
        'caddress' ,
        'cnumber' ,
        'products' ,
        'sid' ,
        'remarks' ,
        'amount' ,
    ];
}
