<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function apar()
    {
        return view('backend.index');
    }
}
