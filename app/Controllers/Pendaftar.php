<?php

namespace App\Controllers;

class Pendaftar extends BaseController
{
    public function index()
    {

        
        if (!session()->get('user_id')) {
            return redirect()->to('login')->with("pesan_gagal", "Anda belum login !!!");
        }
        $data = [
            'title' => 'Pendaftar'
        ];
        return view('pendaftar/index',$data);
    }
}
