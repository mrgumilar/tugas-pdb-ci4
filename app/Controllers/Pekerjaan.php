<?php

namespace App\Controllers;

class Pekerjaan extends BaseController
{
    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('login')->with("pesan_gagal", "Anda belum login !!!");
        }

        if (session()->get('level') == 'staff') {
            return redirect()->to('halaman_error');
        }
        
        $data=[
            'title'=>'Pekerjaan'
        ];
        return view('pekerjaan/index',$data);
    }

    public function getpekerjaan()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Pekerjaan - Berita',
                'list' => $this->pekerjaan->orderBy('pekerjaan_id', 'ASC')->findAll()
            ];
            $msg = [
                'data' => view('pekerjaan/list', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function formpekerjaan()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Tambah Pekerjaan'
            ];
            $msg = [
                'data' => view('pekerjaan/tambah', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function simpanpekerjaan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_pekerjaan' => [
                    'label' => 'pekerjaan',
                    'rules' => 'required|is_unique[pekerjaan.nama_pekerjaan]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh sama',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_pekerjaan' => $validation->getError('nama_pekerjaan'),
                    ]
                ];
            } else {
                $simpandata = [
                    'nama_pekerjaan' => $this->request->getVar('nama_pekerjaan'),
                    'slug_pekerjaan' => $this->request->getVar('slug_pekerjaan'),
                ];

                $this->pekerjaan->insert($simpandata);
                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formeditpekerjaan()
    {
        if ($this->request->isAJAX()) {
            $pekerjaan_id = $this->request->getVar('pekerjaan_id');
            $list =  $this->pekerjaan->find($pekerjaan_id);
            $data = [
                'title'           => 'Edit pekerjaan',
                'pekerjaan_id'     => $list['pekerjaan_id'],
                'nama_pekerjaan'   => $list['nama_pekerjaan'],
            ];
            $msg = [
                'sukses' => view('pekerjaan/edit', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function updatepekerjaan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_pekerjaan' => [
                    'label' => 'Nama pekerjaan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_pekerjaan' => $validation->getError('nama_pekerjaan'),
                    ]
                ];
            } else {
                $updatedata = [
                    'nama_pekerjaan' => $this->request->getVar('nama_pekerjaan'),
                    'slug_pekerjaan' => $this->request->getVar('slug_pekerjaan'),
                ];

                $pekerjaan_id = $this->request->getVar('pekerjaan_id');
                $this->pekerjaan->update($pekerjaan_id, $updatedata);
                $msg = [
                    'sukses' => 'Data berhasil diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapuspekerjaan()
    {
        if ($this->request->isAJAX()) {

            $pekerjaan_id = $this->request->getVar('pekerjaan_id');

            $this->pekerjaan->delete($pekerjaan_id);
            $msg = [
                'sukses' => 'pekerjaan Berhasil Dihapus'
            ];

            echo json_encode($msg);
        }
    }
    //end pekerjaan


}