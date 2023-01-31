<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicDesaController extends Controller
{
    public function utara()
    {
        $kecamatan = 'Pariaman Utara';
        $nama = 'Dasboard';
        $link = route('kec.utara');
        return view('frontend.kecamatan.utara', [
            'link' => $link,
            'nama' => $nama,
            'kecamatan' => $kecamatan

        ]);
    }
}
