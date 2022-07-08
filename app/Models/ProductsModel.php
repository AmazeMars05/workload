<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'poid';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    // protected $allowedFields = ['sid', 'pname','category','size'];

}
?>