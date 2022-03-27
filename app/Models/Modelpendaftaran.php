<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpendaftaran extends Model
{
    protected $table      = 'pendaftar';
    protected $primaryKey = 'pendaftar_id';
    protected $allowedFields = [
        'nama_pendaftar',
        'no_induk',
        'tempat_lahir',
        'tanggal_lahir',
        'agama_id',
        'jenis_kelamin',
        'anak_ke',
        'status_keluarga',
        'alamat_siswa',
        'telepon',
        'diterima_dikelas',
        'diterima_tanggal',
        'asal_sekolah',
        'alamat_asal_sekolah',
        'nama_ayah',
        'nama_ibu',
        'pendidikan_ayah',
        'pendidikan_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'alamat_orangtua',
        'telepon_orangtua',
        'nama_wali',
        'pekerjaan_wali',
        'alamat_wali',
        'telepon_wali',




    ];

    //backend
    // public function list()
    // {
    //     return $this->table('pendaftar')
    //         ->orderBy('nama_pendaftar', 'ASC')
    //         ->get()->getResultArray();
    // }


    public function list()
    {
        return $this->table('pendaftar')
            ->join('agama', 'agama.agama_id = pendaftar.agama_id')
            ->orderBy('berita_id', 'ASC')
            ->get()->getResultArray();
    }
}