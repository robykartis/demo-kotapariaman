<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class KecUtaraController extends Controller
{
    public function index()
    {
        $title = 'Kecamatan Pariaman Utara';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        return view('frontend.kecamatan.utara.index', [
            'title' => $title,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
        ]);
    }
    public function desa()
    {
        $url =  DB::Table('desas')->select('url', 'nama_desa')->where('id', 3)->get();
        $title = 'Kecamatan Pariaman Utara - Desa';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $route = route('kec.utara');
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);


        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $public_desa = route('desa.apar');
        return view('frontend.kecamatan.utara.profil.page_desa', [
            'title' => $title,
            'desa' => $desa,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'public_desa' => $public_desa

        ]);
    }
    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    // Rumah Data
    public function lahan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Lahan';
        $kelompok = 'Rumah Data';
        $list = 'Lahan';
        $data = [
            'Total Luas Lahan',
            'Total Luas Lahan Ladang / Tegalan',
            'Total Luas Lahan Kebun',
            'Total Luas Lahan Kolam',
            'Total Luas Lahan Terbuka',
            'Total Luas Lahan Pemukiman',
            'Total Luas Lahan Sawah',
            'Total Luas Lahan Semak Belukar',
            'Total Luas Lahan Pemakaman',
            'Total Luas Lahan Hutan',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Hektar';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function jalan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Akses Jalan';
        $kelompok = 'Rumah Data';
        $list = 'Akses Jalan';
        $data = [
            'Total Panjang Jalan',
            'Total Panjang Jalan Aspal',
            'Total Panjang Jalan Beton',
            'Total Panjang Jalan Tanah',
            'Total Panjang Jalan Bebatuan',
            'Total Jalan Pribadi',
            'Total Jalan Desa / Kelurahan',
            'Total Jalan Kota',
            'Total Jalan Provinsi',
            'Total Jalan Negara',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Meter';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function bangunan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Bangunan';
        $kelompok = 'Rumah Data';
        $list = 'Bangunan';
        $data = [
            'Total Bangunan',
            'Total Bangunan Rumah Tinggal Isi',
            'Total Bangunan Rumah Tinggal Kosong',
            'Total Bangunan Sarana Umum',
            'Total Bangunan Wirausaha'
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function saranaumum()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Sarana Umum';
        $kelompok = 'Rumah Data';
        $list = 'Sarana Umum';
        $data = [
            'Total Masjid',
            'Total Musholla / Surau',
            'Total Kantor Pemerintahan',
            'Total TK',
            'Total PAUD',
            'Total SD',
            'Total SMP',
            'Total SMA',
            'Total Perguruan Tinggi',
            'Total Sekolah agama SD Sederajat',
            'Total Sekolah agama SMP Sederajat',
            'Total Sekolah agama SMA Sederajat',
            'Total Pesantren',
            'Total Lapangan Olahraga',
            'Total Pasar    ',
            'Total Pos Ronda ',
            'Total Sarana Umum lainnya',
            'Total Sarana Umum Jenis Bangunan',
            'Total Sarana Umum Non Bangunan',
            'Total Sarana Umum Dibangun Negara  ',
            'Total Sarana Umum',
            'Total Sarana Umum Dibangun Dana Desa ',
            'Total Sarana Umum Dibangun Masyarakat ',
            'Total Sarana Umum dibangun Sumbangan Masyarakat ',
            'Total Sarana Umum dibangun dari sumbangan Lainnya',
            'Total Sarana Umum Lahan Tanah Negara ',
            'Total Sarana Umum Lahan Tanah Ulayat / Adat ',
            'Total Sarana Umum Lahan Tanah Desa ',
            'Total Sarana Umum Lahan Kerjasama',
            'Total Sarana Umum Lahan Lainnya',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function wirausaha()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Wira Usaha';
        $kelompok = 'Rumah Data';
        $list = 'Wira Usaha';
        $data = [
            'Total Wirausaha berperasional ',
            'Total Wirausaha Tutup Sementara',
            'Total Wirausaha Tutup Permanen ',
            'Total Wirausaha Modal Milik sendiri	',
            'Total Wirausaha Modal Milik Keluarga ',
            'Total Wirausaha Modal Pinjaman Modal',
            'Total Wirausaha Modal Kerjasama',
            'Total Wirausaha Memiliki ijin usaha',
            'Total Wirausaha Memiliki ijin usaha',
            'Total Wirausaha Mengenakan Pajak kepada konsumen',
            'Total Wirausaha tidak Mengenakan Pajak kepada konsumen',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function rmhkosong()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Rumah Tinggal Kosong';
        $kelompok = 'Rumah Data';
        $list = 'Rumah Tinggal Kosong';
        $data = [
            'Total Secara Keseluruhan Kondisi Rumah Kosong Kumuh',
            'Total Secara Keseluruhan Kondisi Rumah Kosong Tidak Kumuh',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function rmhisi()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Rumah Tinggal Isi';
        $kelompok = 'Rumah Data';
        $list = 'Rumah Tinggal Isi';
        $data = [

            'Total Rumah Tinggal Milik sendiri',
            'Total Rumah Tinggal Kontrak / Sewa',
            'Total Rumah Tinggal Bebas Sewa',
            'Total Rumah Tinggal Dipinjami',
            'Total Rumah Tinggal Dinas',
            'Total Rumah Tinggal Lainnya',
            'Total Lahan Milik Sendiri',
            'Total Lahan Milik Orang Lain',
            'Total Lahan Tanah Negara',
            'Total Lahan Lainnya',
            'Total Lantai Rumah Marmer / Granit',
            'Total Lantai Rumah Kayu / Papan Kualitas Tinggi',
            'Total Lantai Rumah Bambu',
            'Total Lantai Rumah Keramik',
            'Total Lantai Rumah Semen / Bata Merah',
            'Total Lantai Rumah Parket / Vinil / Permadani',
            'Total Lantai Rumah Bambu',
            'Total Lantai Rumah Ubin / Tegel / Teraso',
            'Total Lantai Rumah Kayu / Papan Kualitas Rendah',
            'Total Lantai Rumah Lainnya ',
            'Total Dingding Rumah Semen/beton/kayu berkualitas tinggi',
            'Total Dingding Rumah Kayu berkualitas rendah/bamboo',
            'Total Dingding Rumah Lainnya',
            'Total Memiliki Jendela ada Berfungsi',
            'Total Rumah Memiliki Jendela dan  berfungsi',
            'Total Rumah Tidak Memiliki Jendela',
            'Total Atap Rumah dari Genteng',
            'Total Atap Rumah dari Seng',
            'Total Atap Rumah dari Kayu / Jerami',
            'Total Atap Rumah dari Lainnya',
            'Total Penerangan Rumah Listrik PLN',
            'Total Penerangan Rumah Listrik non PLN',
            'Total Penerangan Rumah Lampu Minyak / Lilin ',
            'Total Penerangan Rumah Sumber penerangan lainnya',
            'Total Penerangan Rumah Tidak ada ',
            'Total Rumah Memasak Dengan Gas kota/LPG/biogas	',
            'Total Rumah Memasak Dengan Kayu bakar',
            'Total Rumah Memasak Dengan Minyak tanah/batu bara',
            'Total Rumah Memasak Dengan Lainnya',
            'Total Rumah Tidak ada Pembuangan Sampah',
            'Total Rumah Pembuangan Sampah ke Kebun / Sungai / Drainas',
            'Total Rumah Pembuangan Sampah Dibakar',
            'Total Rumah Pembuangan Sampah ke Tempat sampah',
            'Total Rumah Pembuangan Sampah ke Tempat sampah diangkut regular',
            'Total Rumah Fasilitas MCK Sendiri',
            'Total Rumah Fasilitas MCK Berkelompok / Tetangga	',
            'Total Rumah Fasilitas MCK Umum	',
            'Total Rumah Fasilitas MCK Tidak ada',
            'Total Rumah Sumber Air Mandi dari Ledeng / Perpipaan Berbayar / Air Isi Ulang / Kemasan	',
            'Total Rumah Sumber Air Mandi dari Sungai, Danau, Embung',
            'Total Rumah Sumber Air Mandi dari Perpipaan',
            'Total Rumah Sumber Air Mandi dari Tadah Air Hujan',
            'Total Rumah Sumber Air Mandi dari Mata Air/ Sumur',
            'Total Rumah Sumber Air Mandi dari Lainnya',
            'Total Rumah Tidak ada Fasilitas Buang Air Besar',
            'Total Rumah Fasilitas Buang Air Besar Jamban Sendiri	',
            'Total Rumah Fasilitas Buang Air Besar Jamban Umum',
            'Total Rumah Fasilitas Buang Air Besar Jamban Bersama / Tetangga	',
            'Total Rumah Fasilitas Buang Air Besar Lainnya',
            'Total Rumah Sumber Air minum dari Ledeng / Perpipaan Berbayar / Air Isi Ulang / Kemasan',
            'Total Rumah Sumber Air minum dari Tadah Air hujan',
            'Total Rumah Sumber Air minum dari Mata Air / Perpipaan / Sumur',
            'Total Rumah Sumber Air minum dari Sungai,Danau,Embung',
            'Total Rumah Sumber Air minum dari Lainnya',
            'Total Rumah Pembuangan Limbah Cair ke Tangki / Instalasi Pengelolaan Limbah',
            'Total Rumah Pembuangan Limbah Cair ke Lubang di Tanah',
            'Total Rumah Pembuangan Limbah Cair ke Sawah / Kolam / Sungai / Drainase / Laut',
            'Total Rumah Pembuangan Limbah Cair ke Lainnya',
            'Total Bangunan Rumah Berada di Bawah SUTET / SUTT / SUTTAS',
            'Total Bangunan Rumah di Bantaran Sungai',
            'Total Rumah di Lereng Bukit / Gunung',
            'Total Kendaraan Bermotor Mobil',
            'Total Kendaraan Bermotor Motor',
            'Total Bangunan ada Jaringan Telepon / Internet Kabel',
            'Total Bangunan tidak ada Jaringan Telepon / Internet Kabel',
            'Total Bangunan ada Jaringan Telepon GSM',
            'Total Bangunan tidak ada Jaringan Telepon GSM',
            'Total Bangunan Jaringan Internet GSM Cepat',
            'Total Bangunan Jaringan Internet GSM Biasa',
            'Total Bangunan Jaringan Internet GSM Lambat',
            'Total Bangunan Jaringan Internet GSM Tidak Ada',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function sptpbb()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - SPT PBB';
        $kelompok = 'Rumah Data';
        $list = 'SPT PBB';
        $data = [
            'Total Surat SPPT PBB',
            'Total Surat SPPT PBB Lunas',
            'Total Surat SPPT PBB Belum Lunas',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function penduduk()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Data Penduduk';
        $kelompok = 'Rumah Data';
        $list = 'Data Penduduk';
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

        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_datapenduduk', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kkmasuk' => $kk_masuk,
            'kkkeluar' => $kk_keluar,
            'kkpecahan' => $kk_pecahan,
            'satuan' => $satuan,
            'penmasuk' => $pen_masuk,
            'penkeluar' => $pen_keluar,
            'penpecahan' => $pen_pecahan,
            'desa' => $desa,

            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function kependudukan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Kependudukan';
        $kelompok = 'Rumah Data';
        $list = 'Kependudukan';
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
        $data = [
            'Total Kartu Keluarga',
            'Total Kartu Keluarga Dalam Desa / Kelurahan',
            'Total Kartu Keluarga Dalam Desa / Kelurahan Satu Kecamatan',
            'Total Kartu Keluarga Dalam Desa / Kelurahan Beda Kecamatan Satu Kota',
            'Total Kartu Keluarga Luar Kota',
            'Total Kartu Keluarga Dengan Rangking Kemiskinan Mampu',
            'Total Kartu Keluarga Dengan Rangking Kemiskinan Biasa',
            'Total Kartu Keluarga Dengan Rangking Kemiskinan Miskin',
            'Total Kartu Keluarga Dengan Rangking Kemiskinan Miskin Ektrim',
            'Total Penduduk',
            'Total Penduduk Laki-laki',
            'Total Penduduk Perempuan',
            'Total Penduduk Menetap',
            'Total Penduduk Merantau',
            'Total Penduduk Islam',
            'Total Penduduk Protestan',
            'Total Penduduk Katolik',
            'Total Penduduk Budha',
            'Total Penduduk Hindu',
            'Total Kawin',
            'Total Janda (Wanita)',
            'Total Duda (Laki-laki)',
            'Total WNI',
            'Total WNA',
            'Total Hak Pilih Politik',
            'Total Bekerja',
            'Total Tidak Bekerja',
            'Total Sedang Mencari Pekerjaan',
            'Total Bersekolah',
            'Total Mengurus Rumah Tangga',
            'Total Petani Pemilik Lahan',
            'Total Petani Pemilik Penyewa',
            'Total Buruh Tani',
            'Total Nelayan Pemilik Kapal / Perahu',
            'Total Nelayan Penyewa Kapal / Perahu',
            'Total Buruh Nelayan',
            'Total Guru',
            'Total Pedagang',
            'Total Pekerjaan Pengolahan / Industri',
            'Total PNS',
            'Total TNI',
            'Total Polisi',
            'Total Perangkat Desa',
            'Total Pegawai Honorer Pemda',
            'Total TKI',
            'Total Tenaga Kesehatan',
            'Total Buruh Harian Lepas',
            'Total Tenaga Kerja PPPK',
            'Total Tenaga Kerja Lainya',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_kependudukan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,

            'kkmasuk' => $kk_masuk,
            'kkkeluar' => $kk_keluar,
            'kkpecahan' => $kk_pecahan,
            'satuan' => $satuan,
            'penmasuk' => $pen_masuk,
            'penkeluar' => $pen_keluar,
            'penpecahan' => $pen_pecahan,

            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function umur()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Umur';
        $kelompok = 'Rumah Data';
        $list = 'Umur';
        $data = [
            // 'Total Penduduk Umur 0 - 4',
            // 'Total Penduduk Umur 5 - 14',
            // 'Total Penduduk Umur 15 - 64',
            // 'Total Penduduk Umur 65 +',
            // 'Total Penduduk Laki-laki Umur 0 - 4',
            // 'Total Penduduk Laki-laki Umur 5 - 14',
            // 'Total Penduduk Laki-laki Umur 15 - 64',
            // 'Total Penduduk Laki-laki Umur 65 +',
            // 'Total Penduduk Perempuan Umur 0 - 4',
            // 'Total Penduduk Perempuan Umur 5 - 14',
            // 'Total Penduduk Perempuan Umur 15 - 64',
            // 'Total Penduduk Perempuan Umur 65 +',
            // 'Total Penduduk Per Umur 1 - 75 dan 75 +',
            // 'Total Penduduk Laki-laki Per Umur 1 - 75 dan 75 +',
            // 'Total Penduduk Wanita Per Umur 1 - 75 dan 75 +',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_umur', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function meninggal()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Meninggal';
        $kelompok = 'Rumah Data';
        $list = 'Meninggal';
        $data = [
            'Total Penduduk Yang Meninggal Dunia Pada Tanggal 12-10-2022',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_meninggal', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function kesehatan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Kesehatan';
        $kelompok = 'Rumah Data';
        $list = 'Kesehatan';
        $data = [
            'Total Peserta Jaminan Kesehatan Nasional',
            'Total Peserta KIS',
            'Total Peserta BPJS Kesehatan Mandiri',
            'Total Peserta BPJS Kesehatan Ketenaga Kerjaan',
            'Total Peserta Ansuransi Lainya',
            'Total Tidak Memiliki Jaminan Kesehatan Nasional',
            'Total Stunting',
            'Total Disabilitas',
            'Total Tunanetra (Buta)',
            'Total Tunarungu (Tuli)',
            'Total Tunawicara (Bisu)',
            'Total Tunarungu - wicara (Tuli - Bisu)',
            'Total Tunadaksa (Cacat Tubuh)',
            'Total Tunagrahita (Cacat Mental, Keterbelakangan Mental)',
            'Total Tunalaras (Eks - Sakit Jiwa,Gangguan Mengendalikan Emosi dan Kontrol Sosial)',
            'Total Cacat Eks - Sakit Kusta (Pernah Sakit Kusta dan Dinyatakan Sembuh Oleh Dokter)',
            'Total Cacat Ganda (Cacat Fisik dan Mental)',
            'Total Dipasung',
            'Total Sakit Mutaber / Diare',
            'Total Sakit Demam Berdarah',
            'Total Sakit Campak',
            'Total Sakit Malaria',
            'Total Sakit Fluburung / SARS',
            'Total Sakit Covid - 19',
            'Total Sakit Hepatits B',
            'Total Sakit Hepatits E',
            'Total Sakit Difteri',
            'Total Sakit Chikungunya',
            'Total Sakit Leptospirosis',
            'Total Sakit Kolera',
            'Total Gizi Buruk (Marasmus dan Kwasiorkor)',
            'Total Sakit Jantung',
            'Total Sakit TBC Paru-paru',
            'Total Sakit Kanker',
            'Total Sakit Diabetes / Kencing Manis / Gula',
            'Total Sakit Lumpuh',
            'Total Sakit Lainya',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function pendidikan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Pendidikan';
        $kelompok = 'Rumah Data';
        $list = 'Pendidikan';
        $data = [
            'Total Tidak Sekolah',
            'Total Tamatan SD dan Sederajat',
            'Total Tamatan SMP dan Sederajat',
            'Total Tamatan SMA dan Sederajat',
            'Total Tamatan Diploma 1 - 3',
            'Total Tamatan S1 dan Sederajat',
            'Total Tamatan S2 dan Sederajat',
            'Total Tamatan S3 dan Sederajat',
            'Total Tamatan Pesantren, Seminar, Wihara dan Sejenisnya',
            'Total Tamatan Sekolah Lainya',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function beapendidikan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Beasiswa Pendidikan';
        $kelompok = 'Rumah Data';
        $list = 'Beasiswa Pendidikan';
        $data = [
            'Total Penerima Beasiswa SAGASAJA',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function bantuansosial()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Bantuan Sosial';
        $kelompok = 'Rumah Data';
        $list = 'Bantuan Sosial';
        $data = [
            'Total Penerima BLT Dana Desa',
            'Total Penerima BLT Dana Kota',
            'Total Penerima BLT Dana Provinsi',
            'Total Penerima Program Keluarga Harapan (PKH)',
            'Total Penerima Bantuan Sosial Tunai',
            'Total Penerima BPNT',
            'Total Penerima Bantuan Presiden',
            'Total Penerima Bantuan UMKM',
            'Total Penerima Bantuan Untuk Pekerja',
            'Total Penerima Bantuan Ketahanan Pangan',
            'Total Penerima Bantuan Lainya',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function pkk()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Dasawisma Pkk';
        $kelompok = 'Rumah Data';
        $list = 'Dasawisma Pkk';
        $data = [
            'Total Penduduk ikut serta dalam Penghayatan dan Pengamalan Pancasila',
            'Total Penduduk tidak ikut serta dalam Penghayatan dan Pengamalan Pancasila',
            'Total Penduduk Ikut serta dalam Gotong royong',
            'Total Penduduk tidak ikut serta dalam Gotong royong',
            'Total Penduduk yang berpendidikan dan Keterampilan',
            'Total Penduduk yang tidak berpendidikan dan berketerampilan',
            'Total Penduduk yang ikut serta dalam Pengembangan kehidupan berkoperasi',
            'Total Penduduk yang tidak ikut serta dalam Pengembangan kehidupan berkoperasi',
            'Total Penduduk yang makanan Pokok Beras',
            'Total Penduduk yang makanan Pokok Jagung',
            'Total Penduduk yang makanan Pokok Sagu',
            'Total Penduduk yang makanan Pokok Lainya',
            'Total Penduduk yang mengikuti kegiatan Posyandu',
            'Total Penduduk yang mengikuti kegiatan PHBS',
            'Total Penduduk yang mengikuti kegiatan Pos BINDU',
            'Total Penduduk yang mengikuti kegiatan kesehatan lainnya',
            'Total Penduduk yang mengikuti Program BPJS',
            'Total Penduduk yang mengikuti Program KB',
            'Total Penduduk yang mengikuti Program Tabungan Masa Depan',
            'Total Kelahiran bayi laki-laki',
            'Total Kelahiran bayi wnita',
            'Total Kematian bayi laki-laki',
            'Total Kematian bayi wanita',
            'Total Kematian ibu melahirkan',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function posyandu()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Posyandu';
        $kelompok = 'Rumah Data';
        $list = 'Posyandu';
        $data = [
            'Total Balita',
            'Total Balita Laki Laki',
            'Total Balita Wanita',
            'Total Balita Tidak Imunisasi',
            'Total Balita Imunisasi Hepatitis B (< 24 Jam)',
            'Total Balita Imunisasi BCG',
            'Total Balita Imunisasi Polio Tetes 1',
            'Total Balita Imunisasi DPT-HB-Hib 1',
            'Total Balita Imunisasi Polio Tetes 2',
            'Total Balita Imunisasi DPT-HB-Hib 2',
            'Total Balita Imunisasi Polio Tetes 3',
            'Total Balita Imunisasi DPT-HB-Hib 3',
            'Total Balita Imunisasi Polio Tetes 4',
            'Total Balita Imunisasi Polio Suntik (IPV)',
            'Total Balita Imunisasi Campak Rubella (MR)',
            'Total Balita Imunisasi DPT-HB-Hib Lanjutan',
            'Total Balita Imunisasi Campak Rubella (MR) Lanjutan',
            'Total Pemberian Vitamin A Kapsul Biru (6-11 Bulan)',
            'Total Pemberian Vitamin A Kapsul Merah (1-5 Tahun)',
            'Total Pemberian Obat Cacing',
            'Total Status Gizi (BB/TB/U) Sangat Kurang',
            'Total Status Gizi (BB/TB/U) Kurang',
            'Total Status Gizi (BB/TB/U) Normal',
            'Total Status Gizi (BB/TB/U) Resiko Gizi Lebih',
            'Total Status Gizi (BB/TB/U) Obesitas',
            'Total Status Gizi (BB/TB/U) Pendek',
            'Total Status BBLR Ya',
            'Total Status BBLR Tidak',
            'Total Lingkar Kepala Anak Makrosefali ',
            'Total Lingkar Kepala Anak Normal',
            'Total Lingkar Kepala Anak Mikrosefali',
            'Total Kehamilan Indeks Massa Tubuh Kurus',
            'Total Kehamilan Indeks Massa Tubuh Normal',
            'Total Kehamilan Indeks Massa Tubuh Gemuk',
            'Total Kehamilan Indeks Massa Tubuh Obesitas',
            'Total Kondisi Kandungan Beresiko ',
            'Total Kondisi Kandungan Tidak Beresiko ',
            'Total Kehamilan Riwayat Kesehatan Hipertensi',
            'Total Kehamilan Riwayat Kesehatan Diabetes',
            'Total Kehamilan Riwayat Kesehatan Autoimun',
            'Total Kehamilan Riwayat Kesehatan Usia diatas 35 tahun',
            'Total Kehamilan Riwayat Kesehatan Jantung',
            'Total Kehamilan Riwayat Kesehatan Tyroid',
            'Total Kehamilan Riwayat Kesehatan Alergi',
            'Total Kehamilan Riwayat Kesehatan Asma',
            'Total Kehamilan Riwayat Kesehatan TB',
            'Total Kehamilan Riwayat Kesehatan Hepatitis B',
            'Total Kehamilan Riwayat Kesehatan Jiwa',
            'Total Kehamilan Riwayat Kesehatan Sifilis',
            'Total Kehamilan Riwayat Kesehatan OHDA',
            'Total Penerima Pemberian Tablet Darah',
            'Total Tidak Menerima Pemberian Tablet Darah',
            'Total LILA KEK',
            'Total LILA Normal',
            'Total Riwayat Kehamilan dan Persalinan Keguguran',
            'Total Riwayat Kehamilan dan Persalinan Kembar',
            'Total Riwayat Kehamilan dan Persalinan Lahir Mati',
            'Total Riwayat Kehamilan dan Persalinan Lainnya ',
            'Total Imunisasi Ibu Hamil TT ke 1',
            'Total Imunisasi Ibu Hamil TT ke 2',
            'Total Imunisasi Ibu Hamil TT ke 3',
            'Total Imunisasi Ibu Hamil TT ke 4',
            'Total Imunisasi Ibu Hamil TT TT ke 5',
            'Total menggunakan alat kontrasepsi',
            'Total tidak menggunakan alat kontrasepsi',
            'Total penggunaan alat kontrasepsi Metode Operasi Wanita (MOW)',
            'Total penggunaan alat kontrasepsi Metode Operasi Pria (MOP)',
            'Total penggunaan alat kontrasepsi Alat Kontrasepsi Dalam Rahim / Spiral',
            'Total penggunaan alat kontrasepsi Implan (bawah kulit)',
            'Total penggunaan alat kontrasepsi Kontrasepsi Suntik',
            'Total penggunaan alat kontrasepsi Pil KB',
            'Total penggunaan alat kontrasepsi Kondom',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    // Statistik

    public function stklahan()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Penggunaan Lahan';
        $kelompok = 'Statistik';
        $list = 'Penggunaan Lahan';
        $data =  [
            'Luas Lahan Ladang / Tegalan (65%)',
            'Luas Lahan Kebun (15%)',
            'Luas Lahan Kolam (20%)',
            'Luas Lahan Terbuka (30%)',
            'Luas Lahan Pemukiman (40%)',
            'Luas Lahan Sawah (60%)',
            'Luas Lahan Semak Belukar (80%)',
            'Luas Lahan Pemakaman (70%)',
            'Luas Lahan Hutan (25%)',
        ];
        $nilai = [''];
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.statistik.page_lahan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function stkjalan()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Akses Jalan';
        $kelompok = 'Statistik';
        $list = 'Akses Jalan';
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

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

        return view('frontend.kecamatan.utara.statistik.page_jalan', [

            'jenisjalan' => $jenisjalan,
            'statusjalan' => $statusjalan,

            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function stkbangunan()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Bangunan';
        $kelompok = 'Statistik';
        $list = 'Bangunan';
        $bangunan = [
            'Total Sarana Umum (65%)',
            'Total Wirausaha (15%)',
            'Total Rumah Tinggal isi (20%)',
            'Total Rumah Tinggal Kosong (30%)',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $satuan = 'Hektar';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.statistik.page_bangunan', [

            'bangunan' => $bangunan,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function stkwirausaha()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Wirausaha';
        $kelompok = 'Statistik';
        $list = 'Wirausaha';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');


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
        $nilai = [
            '65 %',
        ];
        return view('frontend.kecamatan.utara.statistik.page_wirausaha', [
            'statuswirausaha' => $statuswirausha,
            'perijinanwirausaha' => $perijinanwirausha,
            'pajakwirausaha' => $pajakwirausha,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function stkkependudukan()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Wirausaha';
        $kelompok = 'Statistik';
        $list = 'Wirausaha';
        $subnilai = '1000';
        $satuan = 'Data';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');
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
        $nilai = [
            '65 %',
        ];
        return view('frontend.kecamatan.utara.statistik.page_kependudukan', [
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
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function stkpendidikan()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Pendidikan';
        $kelompok = 'Statistik';
        $list = 'Pendidikan';
        $data =  [
            'Total Tidak Sekolah (65%)',
            'Total Tamatan SD dan Sederajat (15%)',
            'Total Tamatan SMP dan Sederajat  (20%)',
            'Total Tamatan SMA dan Sederajat (30%)',
            'Total Tamatan Diploma 1-3 (40%)',
            'Total Tamatan S1 dan Sederajat (60%)',
            'Total Tamatan S2 dan Sederajat (80%)',
            'Total Tamatan S3 dan Sederajat (70%)',
            'Total Tamatan Pesantren, Seminari , Wihara dan Sejenisnya (25%)',
            'Total Tamatan Sekolah Lainnya (25%)',
        ];
        $nilai = [''];
        $subnilai = '1000';
        $satuan = 'Hektar';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.statistik.page_pendidikan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }

    public function stkbantuansosial()
    {
        $datadesa = DB::table('desas')->get();
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kecamatan Pariaman Utara - Bantuan Sosial';
        $kelompok = 'Statistik';
        $list = 'Bantuan Sosial';
        $data =  [
            'Total Penerima BLT dana Desa (65%)',
            'Total Penerima BLT dana Kota (15%)',
            'Total Penerima BLT dana Provinsi  (20%)',
            'Total Penerima Program Keluarga Harapan ( PKH ) (30%)',
            'Total Penerima Bantuan Sosial Tunai (40%)',
            'Total Penerima BPNT (60%)',
            'Total Penerima Bantuan Presiden (80%)',
            'Total Penerima Bantuan UMKM (70%)',
            'Total Penerima Bantuan Untuk Pekerja (25%)',
            'Total Penerima Bantuan Ketahanan Pangan  (25%)',
            'Total Penerima Bantuan Lainnya (25%)',
        ];
        $nilai = [''];
        $subnilai = '1000';
        $satuan = 'Hektar';
        $name = 'Satu Data Kecamatan Pariaman Utara';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kecamatan.utara.statistik.page_bantuansosial', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
            'route' => $route,
            'admkec' => $admkec
        ]);
    }
}
