<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaPariamanController extends Controller
{
    public function index()
    {
        $title = 'Kota Pariaman';
        $name = 'Kota Pariaman';
        $route = route('Kota.index');
        $routekota = route('Kota.index');
        return view('frontend.kota.index', [
            'title' => $title,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    // Rumah Data
    public function lahan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Lahan';
        $kelompok = 'Rumah Data';
        $list = 'Lahan';
        $kecamatan = [
            'Pariaman Utara',

        ];
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
        $nilaidesa = '100';
        $satuan = 'Hektar';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }
    public function jalan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Akses Jalan';
        $kelompok = 'Rumah Data';
        $list = 'Akses Jalan';
        $kecamatan = [
            'Pariaman Utara',

        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }
    public function bangunan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Bangunan';
        $kelompok = 'Rumah Data';
        $list = 'Bangunan';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $data = [
            'Total Bangunan',
            'Total Bangunan Rumah Tinggal Isi',
            'Total Bangunan Rumah Tinggal Kosong',
            'Total Bangunan Sarana Umum',
            'Total Bangunan Wirausaha'
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function saranaumum()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Sarana Umum';
        $kelompok = 'Rumah Data';
        $list = 'Sarana Umum';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function wirausaha()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Wirausaha';
        $kelompok = 'Rumah Data';
        $list = 'Wirausaha';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function rmhkosong()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Rumah Tinggal Kosong';
        $kelompok = 'Rumah Data';
        $list = 'Rumah Tinggal Kosong';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $data = [
            'Total Secara Keseluruhan Kondisi Rumah Kosong Kumuh',
            'Total Secara Keseluruhan Kondisi Rumah Kosong Tidak Kumuh',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function rmhisi()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Rumah Tinggal Isi';
        $kelompok = 'Rumah Data';
        $list = 'Rumah Tinggal Isi';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function sptpbb()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - SPT PBB';
        $kelompok = 'Rumah Data';
        $list = 'SPT PBB';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $data = [
            'Total Surat SPPT PBB',
            'Total Surat SPPT PBB Lunas',
            'Total Surat SPPT PBB Belum Lunas',
        ];
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function penduduk()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Data Penduduk';
        $kelompok = 'Rumah Data';
        $list = 'Data Penduduk';
        $kecamatan = [
            'Pariaman Utara',
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

        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_datapenduduk', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'kkmasuk' => $kk_masuk,
            'kkkeluar' => $kk_keluar,
            'kkpecahan' => $kk_pecahan,
            'penmasuk' => $pen_masuk,
            'penkeluar' => $pen_keluar,
            'penpecahan' => $pen_pecahan,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function kependudukan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Kependudukan';
        $kelompok = 'Rumah Data';
        $list = 'Kependudukan';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_kependudukan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,

            'kkmasuk' => $kk_masuk,
            'kkkeluar' => $kk_keluar,
            'kkpecahan' => $kk_pecahan,
            'penmasuk' => $pen_masuk,
            'penkeluar' => $pen_keluar,
            'penpecahan' => $pen_pecahan,

            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function umur()
    {

        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Umur';
        $kelompok = 'Rumah Data';
        $list = 'Umur';
        $kecamatan = [
            'Pariaman Utara',
            'Pariaman Tengah',
            'Pariaman Selatan',
            'Pariaman Timur'
        ];
        $umur = 1;
        $data = [
            'Total Penduduk Umur 0 - 4',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_umur', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,

            'umur' => $umur,

            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function _detail_umur()
    {

        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Umur';
        $kelompok = 'Rumah Data';
        $list = 'Umur';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $umur = ['10,13,15,2,4,5,33,2'];
        $data = [
            'Total Penduduk Umur 0 - 4',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.detailumur', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,

            'umur' => $umur,

            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function meninggal()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Meninggal';
        $kelompok = 'Rumah Data';
        $list = 'Meninggal';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $data =  'Total Penduduk Yang Meninggal Dunia Pada Tanggal 12-10-2022';
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_meninggal', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function kesehatan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Kesehatan';
        $kelompok = 'Rumah Data';
        $list = 'Kesehatan';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function pendidikan()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Pendidikan';
        $kelompok = 'Rumah Data';
        $list = 'Pendidikan';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function beasiswa()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Beasiswa Pendidikan';
        $kelompok = 'Rumah Data';
        $list = 'Beasiswa Pendidikan';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $data = [
            'Total Penerima Beasiswa SAGASAJA',

        ];
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function bantuansosial()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Bantuan Sosial';
        $kelompok = 'Rumah Data';
        $list = 'Bantuan Sosial';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function pkk()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Dasawisma PKK';
        $kelompok = 'Rumah Data';
        $list = 'Dasawisma PKK';
        $kecamatan = [
            'Pariaman Utara',
        ];
        $data = [
            'Total Penduduk ikut serta dalam Penghayatan dan Pengamalan Pancasila',
            'Total Penduduk tidak ikut serta dalam Penghayatan dan Pengamalan Pancasila',
            'Total Penduduk ikut serta dalam Gotong royong',
            'Total Penduduk tidak Ikut serta dalam Gotong royong',
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function posyandu()
    {
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Posyandu';
        $kelompok = 'Rumah Data';
        $list = 'Posyandu';
        $kecamatan = [
            'Pariaman Utara',
        ];
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
        $nilaidesa = '100';
        $satuan = 'Data';
        $name = 'Satu Data Kota Pariaman';
        $routekota = route('Kota.index');

        return view('frontend.kota.rumahdata.page_rumahdata', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'nilaidesa' => $nilaidesa,
            'subnilai' => $subnilai,
            'name' => $name,
            'routekota' => $routekota,
        ]);
    }

    public function stklahan()
    {
        $datadesa = DB::table('desas')->get();
        $kecamatan = [
            'Pariaman Utara',
        ];
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Penggunaan Lahan';
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
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Kota Pariaman';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kota.statistik.page_lahan', [
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
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
        $kecamatan = [
            'Pariaman Utara',
        ];
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Akses Jalan';
        $kelompok = 'Statistik';
        $list = 'Akses Jalan';
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
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Kota Pariaman';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kota.statistik.page_jalan', [
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'jenisjalan' => $jenisjalan,
            'statusjalan' => $statusjalan,

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
        $kecamatan = [
            'Pariaman Utara',
        ];
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Bangunan';
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
        $nilaidesa = '100';
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Kota Pariaman';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kota.statistik.page_bangunan', [
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,

            'bangunan' => $bangunan,

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
        $kecamatan = [
            'Pariaman Utara',
        ];
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Kependudukan';
        $kelompok = 'Statistik';
        $list = 'Kependudukan';
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
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Kota Pariaman';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kota.statistik.page_kependudukan', [
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
            'desa' => $desa,

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
        $kecamatan = [
            'Pariaman Utara',
        ];
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Pendidikan';
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
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Kota Pariaman';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kota.statistik.page_pendidikan', [
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
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
        $kecamatan = [
            'Pariaman Utara',
        ];
        $desa = DB::table('desas')
            ->leftjoin('kecamatans', 'kecamatans.id', '=', 'desas.id_kec')
            ->leftjoin('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->select('desas.*', 'kecamatans.*', 'kotas.*')
            ->paginate(100);
        $title = 'Kota Pariaman - Bantuan Sosial';
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
        $nilai = '16000';
        $subnilai = '1000';
        $nilaidesa = '100';
        $subnilai = '1000';
        $satuan = '%';
        $name = 'Kota Pariaman';
        $routekota = route('Kota.index');
        $route = route('kec.utara');
        $admkec = route('adkec.utara');

        return view('frontend.kota.statistik.page_bantuansosial', [
            'subnilai' => $subnilai,
            'nilaidesa' => $nilaidesa,
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'kecamatan' => $kecamatan,
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
