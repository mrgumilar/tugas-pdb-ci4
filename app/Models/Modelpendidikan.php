<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpendidikan extends Model
{
    protected $table      = 'pendidikan';
    protected $primaryKey = 'pendidikan_id';
    protected $allowedFields = ['nama_pendidikan'];

    //backend
    public function list()
    {
        return $this->table('pendidikan')
            ->orderBy('nama_pendidikan', 'ASC')
            ->get()->getResultArray();
    }
}
