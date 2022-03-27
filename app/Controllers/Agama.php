<?php

namespace App\Controllers;

class Agama extends BaseController
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
            'title'=>'agama'
        ];
        return view('agama/index',$data);
    }

    public function getagama()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'agama - Berita',
                'list' => $this->agama->orderBy('agama_id', 'ASC')->findAll()
            ];
            $msg = [
                'data' => view('agama/list', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function formagama()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Tambah agama'
            ];
            $msg = [
                'data' => view('agama/tambah', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function simpanagama()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_agama' => [
                    'label' => 'agama',
                    'rules' => 'required|is_unique[agama.nama_agama]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tidak boleh sama',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_agama' => $validation->getError('nama_agama'),
                    ]
                ];
            } else {
                $simpandata = [
                    'nama_agama' => $this->request->getVar('nama_agama'),
                    'slug_agama' => $this->request->getVar('slug_agama'),
                ];

                $this->agama->insert($simpandata);
                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formeditagama()
    {
        if ($this->request->isAJAX()) {
            $agama_id = $this->request->getVar('agama_id');
            $list =  $this->agama->find($agama_id);
            $data = [
                'title'           => 'Edit agama',
                'agama_id'     => $list['agama_id'],
                'nama_agama'   => $list['nama_agama'],
            ];
            $msg = [
                'sukses' => view('agama/edit', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function updateagama()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_agama' => [
                    'label' => 'Nama agama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_agama' => $validation->getError('nama_agama'),
                    ]
                ];
            } else {
                $updatedata = [
                    'nama_agama' => $this->request->getVar('nama_agama'),
                    'slug_agama' => $this->request->getVar('slug_agama'),
                ];

                $agama_id = $this->request->getVar('agama_id');
                $this->agama->update($agama_id, $updatedata);
                $msg = [
                    'sukses' => 'Data berhasil diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapusagama()
    {
        if ($this->request->isAJAX()) {

            $agama_id = $this->request->getVar('agama_id');

            $this->agama->delete($agama_id);
            $msg = [
                'sukses' => 'agama Berhasil Dihapus'
            ];

            echo json_encode($msg);
        }
    }
    //end agama


}