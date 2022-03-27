<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelagama extends Model
{
    protected $table      = 'agama';
    protected $primaryKey = 'agama_id';
    protected $allowedFields = ['nama_agama'];

    //backend
    public function list()
    {
        return $this->table('agama')
            ->orderBy('nama_agama', 'ASC')
            ->get()->getResultArray();
    }
}
