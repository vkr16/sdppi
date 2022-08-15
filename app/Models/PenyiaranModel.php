<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyiaranModel extends Model
{
    protected $table      = 'penyiaran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama', 'jenis_layanan', 'domisili', 'status', 'website'];
}
