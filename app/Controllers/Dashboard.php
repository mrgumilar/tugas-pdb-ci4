<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('login')->with("pesan_gagal", "Anda belum login !!!");
        }
        
        $a = [
            'title'=>'Dashboard | Admin'
        ];
        return view('dashboard/index',$a);
    }
}
