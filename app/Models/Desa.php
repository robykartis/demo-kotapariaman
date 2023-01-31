<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Desa extends Model
{
    use HasFactory;
    public function AllData()
    {
        return DB::table('desas')->get();
    }
}
