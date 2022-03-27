<?php

namespace App\Controllers;

class Pendidikan extends BaseController
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
            'title'=>'Pendidikan'
        ];
        return view('pendidikan/index',$data);
    }

    public function getpendidikan()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'pendidikan - Berita',
                'list' => $this->pendidikan->orderBy('pendidikan_id', 'ASC')->findAll()
            ];
            $msg = [
                'data' => view('pendidikan/list', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function formpendidikan()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Tambah pendidikan'
            ];
            $msg = [
                'data' => view('pendidikan/tambah', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function simpanpendidikan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_pendidikan' => [
                    'label' => 'pendidikan',
                    'rules' => 'required|is_unique[pendidikan.nama_pendidikan]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh sama',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_pendidikan' => $validation->getError('nama_pendidikan'),
                    ]
                ];
            } else {
                $simpandata = [
                    'nama_pendidikan' => $this->request->getVar('nama_pendidikan'),
                    'slug_pendidikan' => $this->request->getVar('slug_pendidikan'),
                ];

                $this->pendidikan->insert($simpandata);
                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formeditpendidikan()
    {
        if ($this->request->isAJAX()) {
            $pendidikan_id = $this->request->getVar('pendidikan_id');
            $list =  $this->pendidikan->find($pendidikan_id);
            $data = [
                'title'           => 'Edit pendidikan',
                'pendidikan_id'     => $list['pendidikan_id'],
                'nama_pendidikan'   => $list['nama_pendidikan'],
            ];
            $msg = [
                'sukses' => view('pendidikan/edit', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function updatependidikan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_pendidikan' => [
                    'label' => 'Nama pendidikan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_pendidikan' => $validation->getError('nama_pendidikan'),
                    ]
                ];
            } else {
                $updatedata = [
                    'nama_pendidikan' => $this->request->getVar('nama_pendidikan'),
                    'slug_pendidikan' => $this->request->getVar('slug_pendidikan'),
                ];

                $pendidikan_id = $this->request->getVar('pendidikan_id');
                $this->pendidikan->update($pendidikan_id, $updatedata);
                $msg = [
                    'sukses' => 'Data berhasil diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapuspendidikan()
    {
        if ($this->request->isAJAX()) {

            $pendidikan_id = $this->request->getVar('pendidikan_id');

            $this->pendidikan->delete($pendidikan_id);
            $msg = [
                'sukses' => 'pendidikan Berhasil Dihapus'
            ];

            echo json_encode($msg);
        }
    }
    //end pendidikan


}