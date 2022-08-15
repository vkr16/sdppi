<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
    protected $table      = 'informations';
    protected $primaryKey = 'title';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['feature', 'title', 'content'];
}
