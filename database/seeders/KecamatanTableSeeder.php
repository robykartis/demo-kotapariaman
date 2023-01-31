<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert([
            [
                'kec_nama' => 'Pariaman Utara',
                'desa_nama' => 'Ampalu',
                'desa_id' => 1
            ],
            [
                'kec_nama' => 'Pariaman Selatan',
                'desa_nama' => 'Tiram',
                'desa_id' => null
            ],
            [
                'kec_nama' => 'Pariaman Tengah',
                'desa_nama' => 'Tiram',
                'desa_id' => null
            ],
            [
                'kec_nama' => 'Pariaman Timur',
                'desa_nama' => 'Tiram',
                'desa_id' => null
            ],

        ]);
    }
}
