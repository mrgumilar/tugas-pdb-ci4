<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpekerjaan extends Model
{
    protected $table      = 'pekerjaan';
    protected $primaryKey = 'pekerjaan_id';
    protected $allowedFields = ['nama_pekerjaan'];




    //backend
    public function list()
    {
        return $this->table('pekerjaan')
            ->orderBy('nama_pekerjaan', 'ASC')
            ->get()->getResultArray();
    }
}