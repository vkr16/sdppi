<?php

namespace App\Models;

use CodeIgniter\Model;

class TelekomunikasiModel extends Model
{
    protected $table      = 'telekomunikasi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama', 'jenis_layanan', 'domisili', 'status', 'website'];
}
