<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDesaAparController extends Controller
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
