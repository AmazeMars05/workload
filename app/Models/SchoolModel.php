<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolModel extends Model
{
    protected $table      = 'school';
    protected $primaryKey = 'sid';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    // protected $allowedFields = ['name'];

}
?>