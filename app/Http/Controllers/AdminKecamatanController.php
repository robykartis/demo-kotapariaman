<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKecamatanController extends Controller
{
    public function utara()
    {
        $kecamatan = 'Utara';
        $link_home = route('kec.utara');
        return view('backend.kecamatan.utara', [
            'link_home' => $link_home,
            'kecamatan' => $kecamatan
        ]);
    }
    public function selatan()
    {
        $kecamatan = 'Selatan';
        $link_home = route('kec.selatan');
        return view('backend.kecamatan.selatan', [
            'link_home' => $link_home,
            'kecamatan' => $kecamatan
        ]);
    }
    public function timur()
    {
        $kecamatan = 'Timur';
        $link_home = route('kec.timur');
        return view('backend.kecamatan.timur', [
            'link_home' => $link_home,
            'kecamatan' => $kecamatan
        ]);
    }
    public function tengah()
    {
        $kecamatan = 'Tengah';
        $link_home = route('kec.tengah');
        return view('backend.kecamatan.tengah', [
            'link_home' => $link_home,
            'kecamatan' => $kecamatan
        ]);
    }
}
