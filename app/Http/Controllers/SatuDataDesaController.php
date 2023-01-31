<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatuDataDesaController extends Controller
{
    public function index()
    {
        $title = 'Satu Data Desa Apar';
        $name = 'Satu Data Desa Apar';
        $route = route('desa.index');
        return view('frontend.satudatadesa.index', [
            'title' => $title,
            'name' => $name,
            'route' => $route,
        ]);
    }
    public function rumah_data()
    {
        $title = 'Satu Data - Rumah Data';
        // Breadcrumbs
        $bread_1 = 'Rumah Data';
        $data = [
            [
                'nama' => 'Lahan',
                'link' => route('desa.rd_lahan'),
            ],
            [
                'nama' => 'Akses Jalan',
                'link' => route('desa.rd_jalan'),
            ],
            [
                'nama' => 'Bangunan',
                'link' => route('desa.rd_bangunan'),
            ],
            [
                'nama' => 'Sarana Umum',
                'link' => route('desa.rd_umum'),
            ],
            [
                'nama' => 'Wirausaha',
                'link' => route('desa.rd_usaha'),
            ],
            [
                'nama' => 'Rumah Isi',
                'link' => route('desa.rd_rmhisi'),
            ],
            [
                'nama' => 'Rumah Kosong',
                'link' => route('desa.rd_rmhkosong'),
            ],
            [
                'nama' =>    'SPPT PBB',
                'link' => route('desa.rd_spptpbb'),
            ],
            [
                'nama' =>   'Kependudukan',
                'link' => route('desa.rd_penduduk'),
            ],
            [
                'nama' =>     'Umur',
                'link' => route('desa.rd_umur'),
            ],
            [
                'nama' =>    'Meninggal',
                'link' => route('desa.rd_meninggal'),
            ],
            [
                'nama' =>     'Kesehatan',
                'link' => route('desa.rd_kesehatan'),
            ],
            [
                'nama' =>      'Pendidikan',
                'link' => route('desa.rd_pendidikan'),
            ],
            [
                'nama' =>    'SAGASAJA',
                'link' => route('desa.rd_beasiswa'),
            ],
            [
                'nama' =>   'Bantuan Sosial',
                'link' => route('desa.rd_bantuansos'),
            ],
            [
                'nama' =>  'Dasawisma PKK',
                'link' => route('desa.rd_pkk'),
            ],
            [
                'nama' =>  'Posyandu',
                'link' => route('desa.rd_posyandu'),
            ],
            [
                'nama' =>    'Pertanian',
                'link' => route('desa.rd_pertanian'),
            ],
            [
                'nama' =>    'Peternakan',
                'link' => route('desa.rd_peternakan'),
            ],
            [
                'nama' =>    'Perikanan',
                'link' => route('desa.rd_perikanan'),
            ],
        ];

        $route = route('desa.index');
        $name = 'Satu Data Desa Apar';
        return view('frontend.satudatadesa.rumahdata.rumah_data', [
            'title' => $title,
            'bread_1' => $bread_1,
            'data' => $data,
            'route' => $route,
            'name' => $name,
        ]);
    }
    public function rd_lahan()
    {
        $title = 'Satu Data - Data Lahan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Lahan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Lahan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            [
                'label' => 'Total Luas Lahan',
                'satuan' => 'Hektar'
            ],
            [
                'label' => 'Total Luas Lahan Ladang / Tegalan',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>  'Total Luas Lahan Kebun',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>    'Total Luas Lahan Kolam',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>     'Total Luas Lahan Terbuka',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>   'Total Luas Lahan Pemukiman',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>      'Total Luas Lahan Sawah',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>      'Total Luas Lahan Semak Belukar',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>       'Total Luas Lahan Pemakaman',
                'satuan' => 'Hektar'
            ],
            [
                'label' =>      'Total Luas Lahan Hutan',
                'satuan' => 'Hektar'
            ],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Hektar';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function rd_jalan()
    {
        $title = 'Satu Data - Data Akses Jalan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Akses Jalan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Akses Jalan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            [
                'label' =>  'Total Panjang Jalan',
                'satuan' => 'Meter'
            ],
            [
                'label' =>  'Total Panjang Jalan Aspal',
                'satuan' => 'Meter'
            ],
            [
                'label' =>  'Total Panjang Jalan Beton',
                'satuan' => 'Meter'
            ],
            [
                'label' => 'Total Panjang Jalan Tanah',
                'satuan' => 'Meter'
            ],
            [
                'label' =>   'Total Panjang Jalan Bebatuan',
                'satuan' => 'Meter'
            ],
            [
                'label' =>    'Total Jalan Pribadi',
                'satuan' => 'Meter'
            ],
            [
                'label' =>    'Total Jalan Desa / Kelurahan',
                'satuan' => 'Meter'
            ],
            [
                'label' =>    'Total Jalan Kota',
                'satuan' => 'Meter'
            ],
            [
                'label' =>     'Total Jalan Provinsi',
                'satuan' => 'Meter'
            ],
            [
                'label' =>   'Total Jalan Negara',
                'satuan' => 'Meter'
            ],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Meter';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function rd_bangunan()
    {
        $title = 'Satu Data - Data Bangunan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Bangunan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Bangunan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            [
                'label' =>    'Total Bangunan',
                'satuan' => 'Unit'
            ],
            [
                'label' =>       'Total Bangunan Rumah Tinggal Isi',
                'satuan' => 'Unit'
            ],
            [
                'label' =>    'Total Bangunan Rumah Tinggal Kosong',
                'satuan' => 'Unit'
            ],
            [
                'label' =>      'Total Bangunan Sarana Umum',
                'satuan' => 'Unit'
            ],
            [
                'label' =>   'Total Bangunan Wirausaha',
                'satuan' => 'Unit'
            ],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function rd_umum()
    {
        $title = 'Satu Data - Data Sarana Umum';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Sarana Umum',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Sarana Umum';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            [
                'label' =>   'Total Masjid',
                'satuan' => 'Unit'
            ],
            [
                'label' =>      'Total Musholla / Surau',
                'satuan' => 'Unit'
            ],
            [
                'label' =>        'Total Kantor Pemerintahan',
                'satuan' => 'Unit'
            ],
            [
                'label' =>        'Total TK',
                'satuan' => 'Unit'
            ],
            [
                'label' =>    'Total PAUD',
                'satuan' => 'Unit'
            ],
            [
                'label' =>    'Total SD',
                'satuan' => 'Unit'
            ],
            [
                'label' =>    'Total SMP',
                'satuan' => 'Unit'
            ],
            ['label' => 'Total SMA', 'satuan' => 'Unit'],
            ['label' => 'Total Perguruan Tinggi', 'satuan' => 'Unit'],
            ['label' => 'Total Sekolah agama SD Sederajat', 'satuan' => 'Unit'],
            ['label' => 'Total Sekolah agama SMP Sederajat', 'satuan' => 'Unit'],
            ['label' => 'Total Sekolah agama SMA Sederajat', 'satuan' => 'Unit'],
            ['label' => 'Total Pesantren', 'satuan' => 'Unit'],
            ['label' => 'Total Lapangan Olahraga', 'satuan' => 'Unit'],
            ['label' => 'Total Pasar    ', 'satuan' => 'Unit'],
            ['label' => 'Total Pos Ronda ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Jenis Bangunan', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Non Bangunan', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Dibangun Negara  ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Dibangun Dana Desa ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Dibangun Masyarakat ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum dibangun Sumbangan Masyarakat ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum dibangun dari sumbangan Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Lahan Tanah Negara ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Lahan Tanah Ulayat / Adat ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Lahan Tanah Desa ', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Lahan Kerjasama', 'satuan' => 'Unit'],
            ['label' => 'Total Sarana Umum Lahan Lainnya', 'satuan' => 'Unit'],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_usaha()
    {
        $title = 'Satu Data - Data Wirausaha';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Wirausaha',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Wirausaha';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Wirausaha berperasional ', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Tutup Sementara', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Tutup Permanen ', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Modal Milik sendiri	', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Modal Milik Keluarga ', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Modal Pinjaman Modal', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Modal Kerjasama', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Memiliki ijin usaha', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Memiliki ijin usaha', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha Mengenakan Pajak kepada konsumen', 'satuan' => 'Unit'],
            ['label' => 'Total Wirausaha tidak Mengenakan Pajak kepada konsumen', 'satuan' => 'Unit'],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_rmhisi()
    {
        $title = 'Satu Data - Data Rumah Tinggal Isi';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Rumah Tinggal Isi',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Rumah Tinggal Isi';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [

            ['label' => 'Total Rumah Tinggal Milik sendiri', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tinggal Kontrak / Sewa', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tinggal Bebas Sewa', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tinggal Dipinjami', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tinggal Dinas', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tinggal Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Lahan Milik Sendiri', 'satuan' => 'Unit'],
            ['label' => 'Total Lahan Milik Orang Lain', 'satuan' => 'Unit'],
            ['label' => 'Total Lahan Tanah Negara', 'satuan' => 'Unit'],
            ['label' => 'Total Lahan Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Marmer / Granit', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Kayu / Papan Kualitas Tinggi', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Bambu', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Keramik', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Semen / Bata Merah', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Parket / Vinil / Permadani', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Bambu', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Ubin / Tegel / Teraso', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Kayu / Papan Kualitas Rendah', 'satuan' => 'Unit'],
            ['label' => 'Total Lantai Rumah Lainnya ', 'satuan' => 'Unit'],
            ['label' => 'Total Dingding Rumah Semen/beton/kayu berkualitas tinggi', 'satuan' => 'Unit'],
            ['label' => 'Total Dingding Rumah Kayu berkualitas rendah/bamboo', 'satuan' => 'Unit'],
            ['label' => 'Total Dingding Rumah Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Memiliki Jendela ada Berfungsi', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Memiliki Jendela dan  berfungsi', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tidak Memiliki Jendela', 'satuan' => 'Unit'],
            ['label' => 'Total Atap Rumah dari Genteng', 'satuan' => 'Unit'],
            ['label' => 'Total Atap Rumah dari Seng', 'satuan' => 'Unit'],
            ['label' => 'Total Atap Rumah dari Kayu / Jerami', 'satuan' => 'Unit'],
            ['label' => 'Total Atap Rumah dari Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Penerangan Rumah Listrik PLN', 'satuan' => 'Unit'],
            ['label' => 'Total Penerangan Rumah Listrik non PLN', 'satuan' => 'Unit'],
            ['label' => 'Total Penerangan Rumah Lampu Minyak / Lilin ', 'satuan' => 'Unit'],
            ['label' => 'Total Penerangan Rumah Sumber penerangan lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Penerangan Rumah Tidak ada ', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Memasak Dengan Gas kota/LPG/biogas	', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Memasak Dengan Kayu bakar', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Memasak Dengan Minyak tanah/batu bara', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Memasak Dengan Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tidak ada Pembuangan Sampah', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Sampah ke Kebun / Sungai / Drainas', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Sampah Dibakar', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Sampah ke Tempat sampah', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Sampah ke Tempat sampah diangkut regular', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas MCK Sendiri', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas MCK Berkelompok / Tetangga	', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas MCK Umum	', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas MCK Tidak ada', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air Mandi dari Ledeng / Perpipaan Berbayar / Air Isi Ulang / Kemasan	', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air Mandi dari Sungai, Danau, Embung', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air Mandi dari Perpipaan', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air Mandi dari Tadah Air Hujan', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air Mandi dari Mata Air/ Sumur', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air Mandi dari Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Tidak ada Fasilitas Buang Air Besar', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas Buang Air Besar Jamban Sendiri	', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas Buang Air Besar Jamban Umum', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas Buang Air Besar Jamban Bersama / Tetangga	', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Fasilitas Buang Air Besar Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air minum dari Ledeng / Perpipaan Berbayar / Air Isi Ulang / Kemasan', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air minum dari Tadah Air hujan', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air minum dari Mata Air / Perpipaan / Sumur', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air minum dari Sungai,Danau,Embung', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Sumber Air minum dari Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Limbah Cair ke Tangki / Instalasi Pengelolaan Limbah', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Limbah Cair ke Lubang di Tanah', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Limbah Cair ke Sawah / Kolam / Sungai / Drainase / Laut', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah Pembuangan Limbah Cair ke Lainnya', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan Rumah Berada di Bawah SUTET / SUTT / SUTTAS', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan Rumah di Bantaran Sungai', 'satuan' => 'Unit'],
            ['label' => 'Total Rumah di Lereng Bukit / Gunung', 'satuan' => 'Unit'],
            ['label' => 'Total Kendaraan Bermotor Mobil', 'satuan' => 'Unit'],
            ['label' => 'Total Kendaraan Bermotor Motor', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan ada Jaringan Telepon / Internet Kabel', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan tidak ada Jaringan Telepon / Internet Kabel', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan ada Jaringan Telepon GSM', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan tidak ada Jaringan Telepon GSM', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan Jaringan Internet GSM Cepat', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan Jaringan Internet GSM Biasa', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan Jaringan Internet GSM Lambat', 'satuan' => 'Unit'],
            ['label' => 'Total Bangunan Jaringan Internet GSM Tidak Ada', 'satuan' => 'Unit'],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_rmhkosong()
    {
        $title = 'Satu Data - Data Rumah Tinggal Kosong';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Rumah Tinggal Kosong',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Rumah Tinggal Kosong';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Secara Keseluruhan Kondisi Rumah Kosong Kumuh', 'satuan' => 'Unit'],
            ['label' => 'Total Secara Keseluruhan Kondisi Rumah Kosong Tidak Kumuh', 'satuan' => 'Unit'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_spptpbb()
    {
        $title = 'Satu Data - Data SPPT PBB';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data SPPT PBB',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data SPPT PBB';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Surat SPPT PBB', 'satuan' => 'Lembar'],
            ['label' => 'Total Surat SPPT PBB Lunas', 'satuan' => 'Lembar'],
            ['label' => 'Total Surat SPPT PBB Belum Lunas', 'satuan' => 'Lembar'],
        ];

        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_penduduk()
    {
        $title = 'Satu Data - Data Kependudukan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Kependudukan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Kependudukan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Kartu Keluarga', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dalam Desa / Kelurahan', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dalam Desa / Kelurahan Satu Kecamatan', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dalam Desa / Kelurahan Beda Kecamatan Satu Kota', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Luar Kota', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dengan Rangking Kemiskinan Mampu', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dengan Rangking Kemiskinan Biasa', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dengan Rangking Kemiskinan Miskin', 'satuan' => 'KK'],
            ['label' => 'Total Kartu Keluarga Dengan Rangking Kemiskinan Miskin Ektrim', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Laki-laki', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Perempuan', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Menetap', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Merantau', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Islam', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Protestan', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Katolik', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Budha', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk Hindu', 'satuan' => 'KK'],
            ['label' => 'Total Kawin', 'satuan' => 'KK'],
            ['label' => 'Total Janda (Wanita)', 'satuan' => 'KK'],
            ['label' => 'Total Duda (Laki-laki)', 'satuan' => 'KK'],
            ['label' => 'Total WNI', 'satuan' => 'KK'],
            ['label' => 'Total WNA', 'satuan' => 'KK'],
            ['label' => 'Total Hak Pilih Politik', 'satuan' => 'KK'],
            ['label' => 'Total Bekerja', 'satuan' => 'KK'],
            ['label' => 'Total Tidak Bekerja', 'satuan' => 'KK'],
            ['label' => 'Total Sedang Mencari Pekerjaan', 'satuan' => 'KK'],
            ['label' => 'Total Bersekolah', 'satuan' => 'KK'],
            ['label' => 'Total Mengurus Rumah Tangga', 'satuan' => 'KK'],
            ['label' => 'Total Petani Pemilik Lahan', 'satuan' => 'KK'],
            ['label' => 'Total Petani Pemilik Penyewa', 'satuan' => 'KK'],
            ['label' => 'Total Buruh Tani', 'satuan' => 'KK'],
            ['label' => 'Total Nelayan Pemilik Kapal / Perahu', 'satuan' => 'KK'],
            ['label' => 'Total Nelayan Penyewa Kapal / Perahu', 'satuan' => 'KK'],
            ['label' => 'Total Buruh Nelayan', 'satuan' => 'KK'],
            ['label' => 'Total Guru', 'satuan' => 'KK'],
            ['label' => 'Total Pedagang', 'satuan' => 'KK'],
            ['label' => 'Total Pekerjaan Pengolahan / Industri', 'satuan' => 'KK'],
            ['label' => 'Total PNS', 'satuan' => 'KK'],
            ['label' => 'Total TNI', 'satuan' => 'KK'],
            ['label' => 'Total Polisi', 'satuan' => 'KK'],
            ['label' => 'Total Perangkat Desa', 'satuan' => 'KK'],
            ['label' => 'Total Pegawai Honorer Pemda', 'satuan' => 'KK'],
            ['label' => 'Total TKI', 'satuan' => 'KK'],
            ['label' => 'Total Tenaga Kesehatan', 'satuan' => 'KK'],
            ['label' => 'Total Buruh Harian Lepas', 'satuan' => 'KK'],
            ['label' => 'Total Tenaga Kerja PPPK', 'satuan' => 'KK'],
            ['label' => 'Total Tenaga Kerja Lainya', 'satuan' => 'KK'],
        ];
        $kk_keluar =
            '  Tanggal 12-12-2022  : 30 KK';
        $kk_masuk =
            '  Tanggal 12-12-2022  : 30 KK';
        $kk_pecahan =
            '  Tanggal 12-12-2022  : 30 KK';
        $pen_keluar =
            '   Tanggal 12-12-2022  : 30 Individu';
        $pen_masuk =
            '  Tanggal 12-12-2022  : 30 Individu';
        $pen_pecahan =
            '  Tanggal 12-12-2022  : 30 Individu';
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';
        $kecamatan = [
            'Pariaman Utara',

        ];
        return view('frontend.satudatadesa.rumahdata.page_kependudukan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'kkmasuk' => $kk_masuk,
            'kkkeluar' => $kk_keluar,
            'kkpecahan' => $kk_pecahan,
            'penmasuk' => $pen_masuk,
            'penkeluar' => $pen_keluar,
            'penpecahan' => $pen_pecahan,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_umur()
    {
        $title = 'Satu Data - Data Umur';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Umur',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Umur';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            'Total Penduduk Umur 0 - 4',
        ];
        $kecamatan = [
            'Pariaman Utara',
            'Pariaman Tengah',
            'Pariaman Selatan',
            'Pariaman Timur'

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_umur', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'data' => $data,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function rd_detail_umur()
    {
        $title = 'Satu Data - Data Umur';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Umur',
                'sub_1' => 'Detail Umur Pariaman Utara',
                'link' => route('desa.rumah_data'),
                'linksub' => route('satudata.rd_umur')
            ],
        ];
        $menu = 'Data Umur';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            'Total Penduduk Umur 0 - 4',
        ];
        $kecamatan =
            'Pariaman Utara';
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.detailumur', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'data' => $data,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_meninggal()
    {
        $title = 'Satu Data - Data Meninggal';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Meninggal',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Meninggal';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data =  'Total Penduduk Yang Meninggal Dunia Pada Tanggal 12-10-2022';
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Orang';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_meninggal', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'data' => $data,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_kesehatan()
    {
        $title = 'Satu Data - Data Kesehatan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Kesehatan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Kesehatan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Peserta Jaminan Kesehatan Nasional', 'satuan' => 'Data'],
            ['label' => 'Total Peserta KIS', 'satuan' => 'Data'],
            ['label' => 'Total Peserta BPJS Kesehatan Mandiri', 'satuan' => 'Data'],
            ['label' => 'Total Peserta BPJS Kesehatan Ketenaga Kerjaan', 'satuan' => 'Data'],
            ['label' => 'Total Peserta Ansuransi Lainya', 'satuan' => 'Data'],
            ['label' => 'Total Tidak Memiliki Jaminan Kesehatan Nasional', 'satuan' => 'Data'],
            ['label' => 'Total Stunting', 'satuan' => 'Orang'],
            ['label' => 'Total Disabilitas', 'satuan' => 'Orang'],
            ['label' => 'Total Tunanetra (Buta)', 'satuan' => 'Orang'],
            ['label' => 'Total Tunarungu (Tuli)', 'satuan' => 'Orang'],
            ['label' => 'Total Tunawicara (Bisu)', 'satuan' => 'Orang'],
            ['label' => 'Total Tunarungu - wicara (Tuli - Bisu)', 'satuan' => 'Orang'],
            ['label' => 'Total Tunadaksa (Cacat Tubuh)', 'satuan' => 'Orang'],
            ['label' => 'Total Tunagrahita (Cacat Mental, Keterbelakangan Mental)', 'satuan' => 'Orang'],
            ['label' => 'Total Tunalaras (Eks - Sakit Jiwa,Gangguan Mengendalikan Emosi dan Kontrol Sosial)', 'satuan' => 'Orang'],
            ['label' => 'Total Cacat Eks - Sakit Kusta (Pernah Sakit Kusta dan Dinyatakan Sembuh Oleh Dokter)', 'satuan' => 'Orang'],
            ['label' => 'Total Cacat Ganda (Cacat Fisik dan Mental)', 'satuan' => 'Orang'],
            ['label' => 'Total Dipasung', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Mutaber / Diare', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Demam Berdarah', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Campak', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Malaria', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Fluburung / SARS', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Covid - 19', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Hepatits B', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Hepatits E', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Difteri', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Chikungunya', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Leptospirosis', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Kolera', 'satuan' => 'Orang'],
            ['label' => 'Total Gizi Buruk (Marasmus dan Kwasiorkor)', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Jantung', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit TBC Paru-paru', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Kanker', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Diabetes / Kencing Manis / Gula', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Lumpuh', 'satuan' => 'Orang'],
            ['label' => 'Total Sakit Lainya', 'satuan' => 'Orang'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_pendidikan()
    {
        $title = 'Satu Data - Data Pendidikan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Pendidikan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Pendidikan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Tidak Sekolah', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan SD dan Sederajat', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan SMP dan Sederajat', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan SMA dan Sederajat', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan Diploma 1 - 3', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan S1 dan Sederajat', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan S2 dan Sederajat', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan S3 dan Sederajat', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan Pesantren, Seminar, Wihara dan Sejenisnya', 'satuan' => 'Orang'],
            ['label' => 'Total Tamatan Sekolah Lainya', 'satuan' => 'Orang'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_beasiswa()
    {
        $title = 'Satu Data - Data Beasiswa Pendidikan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Beasiswa Pendidikan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Beasiswa Pendidikan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Penerima Beasiswa SAGASAJA', 'satuan' => 'Data']
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_bantuansos()
    {
        $title = 'Satu Data - Data Bantuan Sosial';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Bantuan Sosial',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Bantuan Sosial';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Penerima BLT Dana Desa', 'satuan' => 'KK'],
            ['label' => 'Total Penerima BLT Dana Kota', 'satuan' => 'KK'],
            ['label' => 'Total Penerima BLT Dana Provinsi', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Program Keluarga Harapan (PKH)', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Bantuan Sosial Tunai', 'satuan' => 'KK'],
            ['label' => 'Total Penerima BPNT', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Bantuan Presiden', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Bantuan UMKM', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Bantuan Untuk Pekerja', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Bantuan Ketahanan Pangan', 'satuan' => 'KK'],
            ['label' => 'Total Penerima Bantuan Lainya', 'satuan' => 'KK'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_pkk()
    {
        $title = 'Satu Data - Data Dasawisma PKK';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Dasawisma PKK',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Dasawisma PKK';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Penduduk ikut serta dalam Penghayatan dan Pengamalan Pancasila', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk tidak ikut serta dalam Penghayatan dan Pengamalan Pancasila', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk ikut serta dalam Gotong royong', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk tidak Ikut serta dalam Gotong royong', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang berpendidikan dan Keterampilan', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang tidak berpendidikan dan berketerampilan', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang ikut serta dalam Pengembangan kehidupan berkoperasi', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang tidak ikut serta dalam Pengembangan kehidupan berkoperasi', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang makanan Pokok Beras', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang makanan Pokok Jagung', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang makanan Pokok Sagu', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang makanan Pokok Lainya', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti kegiatan Posyandu', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti kegiatan PHBS', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti kegiatan Pos BINDU', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti kegiatan kesehatan lainnya', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti Program BPJS', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti Program KB', 'satuan' => 'KK'],
            ['label' => 'Total Penduduk yang mengikuti Program Tabungan Masa Depan', 'satuan' => 'KK'],
            ['label' => 'Total Kelahiran bayi laki-laki', 'satuan' => 'KK'],
            ['label' => 'Total Kelahiran bayi wnita', 'satuan' => 'KK'],
            ['label' => 'Total Kematian bayi laki-laki', 'satuan' => 'KK'],
            ['label' => 'Total Kematian bayi wanita', 'satuan' => 'KK'],
            ['label' => 'Total Kematian ibu melahirkan', 'satuan' => 'KK'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_posyandu()
    {
        $title = 'Satu Data - Data Posyandu';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Posyandu',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Posyandu';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Balita', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Laki Laki', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Wanita', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Tidak Imunisasi', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Hepatitis B (< 24 Jam)', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi BCG', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Polio Tetes 1', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi DPT-HB-Hib 1', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Polio Tetes 2', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi DPT-HB-Hib 2', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Polio Tetes 3', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi DPT-HB-Hib 3', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Polio Tetes 4', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Polio Suntik (IPV)', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Campak Rubella (MR)', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi DPT-HB-Hib Lanjutan', 'satuan' => 'Orang'],
            ['label' => 'Total Balita Imunisasi Campak Rubella (MR) Lanjutan', 'satuan' => 'Orang'],
            ['label' => 'Total Pemberian Vitamin A Kapsul Biru (6-11 Bulan)', 'satuan' => 'Orang'],
            ['label' => 'Total Pemberian Vitamin A Kapsul Merah (1-5 Tahun)', 'satuan' => 'Orang'],
            ['label' => 'Total Pemberian Obat Cacing', 'satuan' => 'Orang'],
            ['label' => 'Total Status Gizi (BB/TB/U) Sangat Kurang', 'satuan' => 'Orang'],
            ['label' => 'Total Status Gizi (BB/TB/U) Kurang', 'satuan' => 'Orang'],
            ['label' => 'Total Status Gizi (BB/TB/U) Normal', 'satuan' => 'Orang'],
            ['label' => 'Total Status Gizi (BB/TB/U) Resiko Gizi Lebih', 'satuan' => 'Orang'],
            ['label' => 'Total Status Gizi (BB/TB/U) Obesitas', 'satuan' => 'Orang'],
            ['label' => 'Total Status Gizi (BB/TB/U) Pendek', 'satuan' => 'Orang'],
            ['label' => 'Total Status BBLR Ya', 'satuan' => 'Orang'],
            ['label' => 'Total Status BBLR Tidak', 'satuan' => 'Orang'],
            ['label' => 'Total Lingkar Kepala Anak Makrosefali ', 'satuan' => 'Orang'],
            ['label' => 'Total Lingkar Kepala Anak Normal', 'satuan' => 'Orang'],
            ['label' => 'Total Lingkar Kepala Anak Mikrosefali', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Indeks Massa Tubuh Kurus', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Indeks Massa Tubuh Normal', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Indeks Massa Tubuh Gemuk', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Indeks Massa Tubuh Obesitas', 'satuan' => 'Orang'],
            ['label' => 'Total Kondisi Kandungan Beresiko ', 'satuan' => 'Orang'],
            ['label' => 'Total Kondisi Kandungan Tidak Beresiko ', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Hipertensi', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Diabetes', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Autoimun', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Usia diatas 35 tahun', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Jantung', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Tyroid', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Alergi', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Asma', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan TB', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Hepatitis B', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Jiwa', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan Sifilis', 'satuan' => 'Orang'],
            ['label' => 'Total Kehamilan Riwayat Kesehatan OHDA', 'satuan' => 'Orang'],
            ['label' => 'Total Penerima Pemberian Tablet Darah', 'satuan' => 'Orang'],
            ['label' => 'Total Tidak Menerima Pemberian Tablet Darah', 'satuan' => 'Orang'],
            ['label' => 'Total LILA KEK', 'satuan' => 'Orang'],
            ['label' => 'Total LILA Normal', 'satuan' => 'Orang'],
            ['label' => 'Total Riwayat Kehamilan dan Persalinan Keguguran', 'satuan' => 'Orang'],
            ['label' => 'Total Riwayat Kehamilan dan Persalinan Kembar', 'satuan' => 'Orang'],
            ['label' => 'Total Riwayat Kehamilan dan Persalinan Lahir Mati', 'satuan' => 'Orang'],
            ['label' => 'Total Riwayat Kehamilan dan Persalinan Lainnya ', 'satuan' => 'Orang'],
            ['label' => 'Total Imunisasi Ibu Hamil TT ke 1', 'satuan' => 'Orang'],
            ['label' => 'Total Imunisasi Ibu Hamil TT ke 2', 'satuan' => 'Orang'],
            ['label' => 'Total Imunisasi Ibu Hamil TT ke 3', 'satuan' => 'Orang'],
            ['label' => 'Total Imunisasi Ibu Hamil TT ke 4', 'satuan' => 'Orang'],
            ['label' => 'Total Imunisasi Ibu Hamil TT TT ke 5', 'satuan' => 'Orang'],
            ['label' => 'Total menggunakan alat kontrasepsi', 'satuan' => 'Orang'],
            ['label' => 'Total tidak menggunakan alat kontrasepsi', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Metode Operasi Wanita (MOW)', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Metode Operasi Pria (MOP)', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Alat Kontrasepsi Dalam Rahim / Spiral', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Implan (bawah kulit)', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Kontrasepsi Suntik', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Pil KB', 'satuan' => 'Orang'],
            ['label' => 'Total penggunaan alat kontrasepsi Kondom', 'satuan' => 'Orang'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_pertanian()
    {
        $title = 'Satu Data - Data Pertanian';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Pertanian',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Pertanian';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Usaha Pertanian Padi ', 'satuan' => 'Ha'],
            ['label' => 'Total Usaha Pertanian Jagung ', 'satuan' => 'Ha'],
            ['label' => 'Total Usaha Pertanian Cabe', 'satuan' => 'Ha'],
            ['label' => 'Total Usaha Pertanian Bawang Merah  ', 'satuan' => 'Ha'],
            ['label' => 'Total Usaha Pertanian Kelapa ', 'satuan' => 'Ha'],
            ['label' => 'Total Usaha Pertanian Cacao', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Serangan Penyakit Pertanian Padi ', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Serangan Penyakit Pertanian Jagung ', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Serangan Penyakit Pertanian Cabe Merah', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Serangan Penyakit Pertanian bawang merah  ', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Serangan Penyakit Pertanian Kelapa ', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Serangan Penyakit Pertanian Cacao ', 'satuan' => 'Ha'],
            ['label' => 'Total Kebutuhan Alsintan Jenis Padi ', 'satuan' => 'Data'],
            ['label' => 'Total Kebutuhan Alsintan Jenis Jagung ', 'satuan' => 'Data'],
            ['label' => 'Total Kebutuhan Alsintan Jenis Bawang Merah ', 'satuan' => 'Data'],
            ['label' => 'Total Kebutuhan Alsintan Jenis Cabe Merah', 'satuan' => 'Data'],
            ['label' => 'Total Kebutuhan Alsintan Jenis Kelapa', 'satuan' => 'Data'],
            ['label' => 'Total Kebutuhan Alsintan Jenis Cacao', 'satuan' => 'Data'],
            ['label' => 'Total Produksi Pasca Panen Jenis Padi ', 'satuan' => 'Ton'],
            ['label' => 'Total Produksi Pasca Panen Jenis Jagung ', 'satuan' => 'Ton'],
            ['label' => 'Total Produksi Pasca Panen Jenis Cabe Merah ', 'satuan' => 'Ton'],
            ['label' => 'Total Produksi Pasca Panen Jenis Bawang Merah ', 'satuan' => 'Ton'],
            ['label' => 'Total Produksi Pasca Panen Jenis Kelapa ', 'satuan' => 'Ton'],
            ['label' => 'Total Produksi Pasca Panen Jenis Jahe ', 'satuan' => 'Ton'],
            ['label' => 'Total Kelompok Tani ', 'satuan' => 'Data'],
            ['label' => 'Total Luas Sawah Milik Sendiri', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Sawah Garapan ', 'satuan' => 'Ha'],
            ['label' => 'Total Luas Sawah Bagi Hasil  ', 'satuan' => 'Ha'],
            ['label' => 'Total Penerima Bantuan Kelompok Tani ', 'satuan' => 'Data'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_peternakan()
    {
        $title = 'Satu Data - Data Peternakan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Peternakan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Peternakan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Ternak Ayam ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Itik ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Puyuh ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Sapi ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Kerbau ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Kuda  ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Kambing ', 'satuan' => 'Ekor'],
            ['label' => 'Total Ternak Domba ', 'satuan' => 'Ekor'],
            ['label' => 'Total Usaha Wallet', 'satuan' => 'Data'],
            ['label' => 'Total Kucing Peliharaan', 'satuan' => 'Data'],
            ['label' => 'Total Anjing Peliharaan', 'satuan' => 'Data'],
            ['label' => 'Total Kucing Yang Sudah Di Vaksin Rabies', 'satuan' => 'Data'],
            ['label' => 'Total Kucing Yang Belum Di Vaksin Rabies', 'satuan' => 'Data'],
            ['label' => 'Total Anjing Yang Sudah Di Vaksin Rabies', 'satuan' => 'Data'],
            ['label' => 'Total Anjing Yang Sudah Di Vaksin Rabies', 'satuan' => 'Data'],
            ['label' => 'Total Kelompok Ternak ', 'satuan' => 'Data'],
            ['label' => 'Total usaha kerupuk Kulit ', 'satuan' => 'Data'],
            ['label' => 'Total Usaha Telur Asin', 'satuan' => 'Data'],
            ['label' => 'Total Usaha Ayam Potong', 'satuan' => 'Data'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    public function rd_perikanan()
    {
        $title = 'Satu Data - Data Perikanan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Rumah Data',
                'sub' => 'Data Perikanan',
                'link' => route('desa.rumah_data')
            ],
        ];
        $menu = 'Data Perikanan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data = [
            ['label' => 'Total Pelaku Usaha Budidaya Ikan ', 'satuan' => 'Data'],
            ['label' => 'Total Kelompok Usaha Budidaya Ikan ', 'satuan' => 'Data'],
            ['label' => 'Total Pelaku Usaha Ikan Tangkap', 'satuan' => 'Data'],
            ['label' => 'Total Kelompok Usaha Ikan Tangkap', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Budidaya Ikan Kolam Air Tenang ', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Budidaya Ikan Kolam Air Deras', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Budidaya Ikan Kolam Terpal', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Budidaya Ikan Keramba', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Alat Tangkap Ikan pancing ulur ', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Alat Tangkap Ikan Jaring Insang', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Alat Tangkap Ikan Payang', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Alat Tangkap Ikan Bagan', 'satuan' => 'Data'],
            ['label' => 'Total Jenis Alat Tangkap Ikan Tonda', 'satuan' => 'Data'],
            ['label' => 'Total Kapal Tangkap Kapal Motor', 'satuan' => 'Data'],
            ['label' => 'Total Kapal Tangkap Motor Tempel', 'satuan' => 'Data'],
            ['label' => 'Total Kapal Tangkap tanpa motor', 'satuan' => 'Data'],
            ['label' => 'Total Produksi Rata-rata Perbulan Ikan Tangkap', 'satuan' => 'Data'],
            ['label' => 'Total Produksi Rata-rata Triwulan Budidaya Ikan ', 'satuan' => 'Data'],
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.rumahdata.page_rumahdata', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }

    // Statistik
    public function statistik()
    {
        $title = 'SDKP - Statistik';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => '',
                'link' => route('desa.statistik')
            ],
        ];
        $data = [
            [
                'nama' => 'Lahan',
                'link' => route('desa.stk_lahan'),
            ],
            [
                'nama' => 'Akses Jalan',
                'link' => route('desa.stk_jalan'),
            ],
            [
                'nama' => 'Bangunan',
                'link' => route('desa.stk_bangunan'),
            ],

            [
                'nama' => 'Wirausaha',
                'link' => route('desa.stk_usaha'),
            ],
            [
                'nama' =>   'Kependudukan',
                'link' => route('desa.stk_penduduk'),
            ],
            [
                'nama' =>      'Pendidikan',
                'link' => route('desa.stk_pendidikan'),
            ],
            [
                'nama' =>   'Bantuan Sosial',
                'link' => route('desa.stk_bantuan'),
            ],
            [
                'nama' =>   'Pertanian',
                'link' => route('desa.stk_pertanian'),
            ],
            [
                'nama' =>   'Peternakan',
                'link' => route('desa.stk_peternakan'),
            ],
            [
                'nama' =>   'Perikanan',
                'link' => route('desa.stk_perikanan'),
            ],
        ];
        $route = route('desa.index');
        $name = 'Satu Data Desa Apar';
        return view('frontend.satudatadesa.statistik.statistik', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
        ]);
    }
    public function stk_lahan()
    {
        $title = 'SDKP - Statistik';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Lahan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Lahan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data =  [
            ' Ladang / Tegalan (65%)',
            ' Kebun (15%)',
            ' Kolam (20%)',
            ' Terbuka (30%)',
            ' Pemukiman (40%)',
            ' Sawah (60%)',
            ' Semak Belukar (80%)',
            ' Pemakaman (70%)',
            ' Hutan (25%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_lahan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'data' => $data,
            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_jalan()
    {
        $title = 'SDKP - Akses Jalan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Akses Jalan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Akses Jalan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $jenisjalan = [
            'Banyak Jalan Jenis Aspal (65%)',
            'Banyak Jalan Jenis Beton (15%)',
            'Banyak Jalan Jenis Tanah (20%)',
            'Banyak Jalan Jenis Bebatuan (30%)',
        ];
        $statusjalan = [
            'Banyak Status Jalan Pribadi (65%)',
            'Banyak Status Jalan Desa / Kelurahan (15%)',
            'Banyak Status Jalan Kota (20%)',
            'Banyak Status Jalan Provinsi (30%)',
            'Banyak Status Jalan Negara (40%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_jalan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'jenisjalan' => $jenisjalan,
            'statusjalan' => $statusjalan,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_bangunan()
    {
        $title = 'SDKP - Bangunan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Bangunan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Bangunan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $bangunan = [
            'Total Sarana Umum (65%)',
            'Total Wirausaha (15%)',
            'Total Rumah Tinggal isi (20%)',
            'Total Rumah Tinggal Kosong (30%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_bangunan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,


            'bangunan' => $bangunan,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_usaha()
    {
        $title = 'SDKP - Wirausaha';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Wirausaha',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Wirausaha';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $statuswirausha =  [
            'Total Wirausaha (65%)',
            'Total Wirausaha Tutup Sementara (15%)',
            'Total Wirausaha Tutup Permanen (20%)',
        ];
        $perijinanwirausha =  [
            'Total Wirausaha Memiliki Ijin Usaha (65%)',
            'Total Wirausaha Tidak Memiliki Ijin Usaha (15%)',
        ];
        $pajakwirausha =  [

            'Total Wirausaha Mengenakan Pajak Kepada Konsumen (65%)',
            'Total Wirausaha Tidak Mengenakan Pajak Kepada Konsumen (15%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_usaha', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,


            'statuswirausaha' => $statuswirausha,
            'perijinanwirausaha' => $perijinanwirausha,
            'pajakwirausaha' => $pajakwirausha,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_penduduk()
    {
        $title = 'SDKP - Kependudukan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Kependudukan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Kependudukan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $totalkk =  [
            'Total KK Dalam Desa / Kelurahan (65%)',
            'Total KK Luar Desa / Kelurahan Disatu Kecamatan (15%)',
            'Total KK Luar Desa / Kelurahan Beda Kecamatan Disatu Kota (20%)',
        ];
        $rangkingkemiskinan =  [
            'Total KK Dengan Rangking Kemiskinan Mampu (60%)',
            'Total KK Dengan Rangking Kemiskinan Biasa (20%)',
            'Total KK Dengan Rangking Kemiskinan Miskin (15%)',
            'Total KK Dengan Rangking Kemiskinan Miskin Ekstrim (10%)',
        ];
        $totalpenduduk =  [

            'Total Laki-laki (60%)',
            'Total Prempuan (40%)',
        ];
        $jeniskelamin =  [

            'Total Kelamin Laki-laki (60%)',
            'Total Perempuan (40%)',
        ];
        $statustinggal =  [

            'Total Penduduk Menetap (60%)',
            'Total Penduduk Merantau (40%)',
        ];
        $agama =  [

            'Total Beragama Islam (60%)',
            'Total Beragama Protestan (10%)',
            'Total Beragama Katolik (9%)',
            'Total Beragama Budha (5%)',
            'Total Beragama Hindu (5%)',
        ];
        $pernikahan =  [
            'Total Kawin (60%)',
            'Total Tidak Kawin (10%)',
            'Total Janda (9%)',
            'Total Duda (5%)',
        ];
        $kewarganegaraan =  [

            'Total WNI (60%)',
            'Total WNA(10%)',
        ];
        $hakpolitik =  [

            'Total Hak Pilih Politik (60%)',
            'Total Tidak Memiliki Hak Politik(40%)',
        ];
        $pekerjaan =  [
            'Total Bekerja (30%)',
            'Total Tidak Bekerja (10%)',
            'Total Sedang Mencari Pekerjaan (10%)',
            'Total Bersekolah (11%)',
            'Total Mengurus Rumah Tangga (39%)',
        ];
        $jenispekerjaan =  [
            'Total Petani Pemilik Lahan (30%)',
            'Total Petani Penyewa (5%)',
            'Total Buruh Tani (10%)',
            'Total Nelayan Pemilik Kapal / Perahu (2%)',
            'Total Nelayan Penyewa Kapal / Perahu (2%)',
            'Total Buruh Nelayan (2%)',
            'Total Guru (2%)',
            'Total Pedagang (2%)',
            'Total Pekerja Pengolahan / Industri (2%)',
            'Total PNS (12%)',
            'Total TNI (2%)',
            'Total Polisi (9%)',
            'Total Perangkat Desa (2%)',
            'Total Pegawai Honorer Pemda (10%)',
            'Total TKI (2%)',
            'Total Tenaga Kesehatan (2%)',
            'Total Buruh Harian Lepas (2%)',
            'Total Tenaga Kerja PPPK (2%)',
            'Total Tenaga Kerja Lainya (2%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_kependudukan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,


            'totalkk' => $totalkk,
            'rangkingkemiskinan' => $rangkingkemiskinan,
            'totalpenduduk' => $totalpenduduk,
            'jeniskelamin' => $jeniskelamin,
            'statustinggal' => $statustinggal,
            'agama' => $agama,
            'pernikahan' => $pernikahan,
            'kewarganegaraan' => $kewarganegaraan,
            'hakpolitik' => $hakpolitik,
            'pekerjaan' => $pekerjaan,
            'jenispekerjaan' => $jenispekerjaan,

            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_pendidikan()
    {
        $title = 'SDKP - Pendidikan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Pendidikan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Pendidikan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data =  [
            'Tidak Sekolah (65%)',
            'Tamatan SD dan Sederajat (15%)',
            'Tamatan SMP dan Sederajat  (20%)',
            'Tamatan SMA dan Sederajat (30%)',
            'Tamatan Diploma 1-3 (40%)',
            'Tamatan S1 dan Sederajat (60%)',
            'Tamatan S2 dan Sederajat (80%)',
            'Tamatan S3 dan Sederajat (70%)',
            'Tamatan Pesantren, Seminari , Wihara dan Sejenisnya (25%)',
            'Tamatan Sekolah Lainnya (25%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_pendidikan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,


            'data' => $data,


            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_bantuan()
    {
        $title = 'SDKP - Bantuan Sosial';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Bantuan Sosial',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Bantuan Sosial';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $data =  [
            ' BLT dana Desa (65%)',
            ' BLT dana Kota (15%)',
            ' BLT dana Provinsi  (20%)',
            ' Program Keluarga Harapan ( PKH ) (30%)',
            ' Bantuan Sosial Tunai (40%)',
            ' BPNT (60%)',
            ' Bantuan Presiden (80%)',
            ' Bantuan UMKM (70%)',
            ' Bantuan Untuk Pekerja (25%)',
            ' Bantuan Ketahanan Pangan  (25%)',
            ' Bantuan Lainnya (25%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_bantuansosial', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,


            'data' => $data,


            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_pertanian()
    {
        $title = 'SDKP - Pertanian';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Pertanian',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Pertanian';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $pertanian = [
            'Padi (65%)',
            'Jagung (15%)',
            'Cabe (20%)',
            'Bawang Merah (30%)',
            'Kelapa (40%)',
            'Cacao (60%)',

        ];

        $totpanen = [
            'Padi (65%)',
            'Jagung (15%)',
            'Cabe (20%)',
            'Bawang Merah (30%)',
            'Kelapa (40%)',
            'Jahe (60%)',
        ];
        $totsawah = [
            'Milik (65%)',
            'Garapan (15%)',
            'Bagi Hasil (20%)'
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_pertanian', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'pertanian' => $pertanian,
            'totpanen' => $totpanen,
            'totsawah' => $totsawah,


            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_peternakan()
    {
        $title = 'SDKP - Peternakan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Peternakan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Peternakan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $ternak = [
            ' Ayam (65%)',
            ' itik (15%)',
            ' Puyuh (20%)',
            ' Sapi (30%)',
            ' Kerbau (40%)',
            ' Kuda  (60%)',
            ' Kambing (12%)',
            ' Domba (13%)',
        ];

        $hewan = [
            ' Kucing (65%)',
            ' Anjing (15%)',
        ];
        $usaha = [
            ' Kerupuk Kulit (65%)',
            ' Telur Asin (15%)',
            ' Ayam Potong (20%)',
        ];
        $kecamatan = [
            'Pariaman Utara',

        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_peternakan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'ternak' => $ternak,
            'hewan' => $hewan,
            'usaha' => $usaha,


            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
    public function stk_perikanan()
    {
        $title = 'SDKP - Perikanan';
        // Breadcrumbs
        $breadcrumbs = [
            [
                'nama' => 'Statistik',
                'sub' => 'Perikanan',
                'link' => route('desa.statistik')
            ],
        ];
        $menu = 'Perikanan';

        $route = route('desa.index');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $usaha = [
            'Total Pelaku Usaha Budidaya Ikan (65%)',
            'Total Kelompok Usaha Budidaya Ikan (15%)',
            'Total Pelaku Usaha Ikan Tangkap (20%)',
            'Total Kelompok Usaha Ikan Tangkap (30%)',
        ];

        $budidaya = [
            ' Ikan Kolam Air Tenang (65%)',
            ' Ikan Kolam Air Deras (15%)',
            ' Ikan Kolam Terpal (20%)',
            ' Ikan Keramba (30%)',
        ];
        $tangkap = [
            ' Ikan Pancing Ulur (65%)',
            ' Ikan Jaring Insang (15%)',
            ' Ikan Payang (20%)',
            ' Ikan Bagan (30%)',
            ' Ikan Tonda (40%)',
            ' Kapal Motor (43%)',
            ' Motor Tempel(35%)',
            ' Tanpa Motor (10%)',
        ];

        $kecamatan = [
            'Pariaman Utara',
        ];
        $nilai = rand(11111, 99999);
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Desa Apar';

        return view('frontend.satudatadesa.statistik.page_perikanan', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,

            'usaha' => $usaha,
            'budidaya' => $budidaya,
            'tangkap' => $tangkap,


            'route' => $route,
            'name' => $name,
            'desa' => $desa,
            'kecamatan' => $kecamatan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'menu' => $menu,
        ]);
    }
}
