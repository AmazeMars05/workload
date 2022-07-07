<?php

namespace App\Models;

use CodeIgniter\Model;

class PriceModel extends Model
{
    protected $table      = 'price';
    protected $primaryKey = 'pid';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['poid', 'size','price'];

}