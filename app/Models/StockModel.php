<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table      = 'stock';
    protected $primaryKey = 'stid';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    //protected $allowedFields = ['poid', 'quantity'];

}
?>