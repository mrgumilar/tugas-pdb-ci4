<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Pendaftaran'
        ];
        return view('pendaftaran/index',$data);
    }
}
