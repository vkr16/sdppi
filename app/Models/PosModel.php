<?php

namespace App\Models;

use CodeIgniter\Model;

class PosModel extends Model
{
    protected $table      = 'pos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama', 'jenis_layanan', 'domisili', 'status', 'website'];
}
