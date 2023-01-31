<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;


class DesaAparController extends Controller
{
    public function index()
    {
        $title = 'Desa Apar - Index';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.index', [
            'title' => $title,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }


    // Rumah data

    public function lahan()
    {
        $title = 'Desa Apar - Lahan';
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
        $nilai = '500';
        $satuan = 'Hektar';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');

        return view('frontend.desa.apar.rumahdata.page_lahan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function jalan()
    {
        $title = 'Desa Apar - Akses Jalan';
        $kelompok = 'Rumah Data';
        $list = 'Jalan';
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
        $nilai = '500';
        $satuan = 'Meter';
        $name = 'Desa Apar ';
        $route = route('desa.apar');
        $routekota = route('Kota.index');

        return view('frontend.desa.apar.rumahdata.page_jalan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function bangunan()
    {
        $title = 'Desa Apar - Banguan';
        $kelompok = 'Rumah Data';
        $list = 'Bangunan';
        $data = [
            'Total Bangunan',
            'Total Bangunan Rumah Tinggal Isi',
            'Total Bangunan Rumah Tinggal Kosong',
            'Total Bangunan Sarana Umum',
            'Total Bangunan Wirausaha'
        ];
        $nilai = '500';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_bangunan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function sptpbb()
    {
        $title = 'Desa Apar - SPPT PBB';
        $kelompok = 'Rumah Data';
        $list = 'SPPT PBB';
        $data = [
            'Total Surat SPPT PBB',
            'Total Surat SPPT PBB Lunas',
            'Total Surat SPPT PBB Belum Lunas',

        ];
        $nilai = '500';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_sptpbb', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function kependudukan()
    {
        $title = 'Desa Apar - Kependudukan';
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
        $nilai = '500';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_kependudukan', [
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
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function umur()
    {
        $title = 'Desa Apar - Umur';
        $kelompok = 'Rumah Data';
        $list = 'Umur';
        $data = [
            'Total Umur Penduduk',
            'Total Umur Penduduk Laki-laki',
            'Total Umur Penduduk Perempuan',

        ];
        $nilai = '500';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_umur', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function datapenduduk()
    {
        $title = 'Desa Apar - Data Penduduk';
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
        $nilai = '500';
        $satuan = 'Orang';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_datapenduduk', [
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
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function meninggal()
    {
        $title = 'Desa Apar - Meninggal';
        $kelompok = 'Rumah Data';
        $list = 'Meninggal';
        $data = [
            'Total Penduduk Yang Meninggal Dunia Pada Tanggal 12-10-2022',

        ];
        $nilai = '5';
        $satuan = 'Orang';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_meninggal', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function kesehatan()
    {
        $title = 'Desa Apar - Kesehatan';
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
        $nilai = '5';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_kesehatan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function pendidikan()
    {
        $title = 'Desa Apar - Pendidikan';
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
        $nilai = '5';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_pendidikan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function beapendidikan()
    {
        $title = 'Desa Apar - Beasiswa Pendidikan';
        $kelompok = 'Rumah Data';
        $list = 'Beasiswa Pendidikan';
        $data = [
            'Total Penerima Beasiswa SAGASAJA',

        ];
        $nilai = '5';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_beapendidikan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }


    public function bantuansosial()
    {
        $title = 'Desa Apar - Bantuan Sosial';
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
        $nilai = '5';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_bantuansosial', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function rumahkosong()
    {
        $title = 'Desa Apar - Rumah Tinggal Kosong';
        $kelompok = 'Rumah Data';
        $list = 'Rumah Tinggal Kosong';
        $data = [
            'Total Secara Keseluruhan Kondisi Rumah Kosong Kumuh',
            'Total Secara Keseluruhan Kondisi Rumah Kosong Tidak Kumuh',
        ];
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_rumahkosong', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }

    public function rumahisi()
    {
        $title = 'Desa Apar - Rumah Tinggal Isi';
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
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_rumahkosong', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function saranaumum()
    {
        $title = 'Desa Apar - Sarana Umum';
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
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_saranaumum', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function wirausaha()
    {
        $title = 'Desa Apar - Wirausaha';
        $kelompok = 'Rumah Data';
        $list = 'Wirausaha';
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
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_saranaumum', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function pkk()
    {
        $title = 'Desa Apar - Dasawisma PKK';
        $kelompok = 'Rumah Data';
        $list = 'Dasawisma PKK';
        $data = [
            'Total Penduduk ikut serta dalam Penghayatan dan Pengamalan Pancasila',
            'Total Penduduk tidak ikut serta dalam Penghayatan dan Pengamalan Pancasila',
            'Total Penduduk Ikut serta dalam Gotong royong',
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
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_rumahkosong', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function posyandu()
    {
        $title = 'Desa Apar - Posyandu';
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
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_posyandu', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function pertanian()
    {
        $title = 'Desa Apar - Pertanian';
        $kelompok = 'Rumah Data';
        $list = 'Pertanian';
        $data = [
            'Total Usaha Pertanian Padi ',
            'Total Usaha Pertanian Jagung ',
            'Total Usaha Pertanian Cabe',
            'Total Usaha Pertanian Bawang Merah  ',
            'Total Usaha Pertanian Kelapa ',
            'Total Usaha Pertanian Cacao',
            'Total luas Serangan Penyakit pertanian Padi ',
            'Total luas Serangan Penyakit pertanian Jagung ',
            'Total luas Serangan Penyakit pertanian Cabe Merah',
            'Total luas Serangan Penyakit pertanian bawang merah  ',
            'Total luas Serangan Penyakit pertanian Kelapa ',
            'Total luas Serangan Penyakit pertanian Cacao ',
            'Total Kebutuhan Alsintan jenis Padi ',
            'Total Kebutuhan Alsintan jenis Jagung ',
            'Total Kebutuhan Alsintan jenis Bawang Merah ',
            'Total Kebutuhan Alsintan jenis Cabe Merah',
            'Total Kebutuhan Alsintan jenis Kelapa',
            'Total Kebutuhan Alsintan jenis Cacao',
            'Total Produksi Pasca Panen jenis Padi ',
            'Total Produksi Pasca Panen jenis Jagung ',
            'Total Produksi Pasca Panen jenis Cabe Merah ',
            'Total Produksi Pasca Panen jenis Bawang Merah ',
            'Total Produksi Pasca Panen jenis Kelapa ',
            'Total Produksi Pasca Panen jenis Jahe ',
            'Total Kelompok Tani ',
            'Total Luas Sawah milik ',
            'Total Luas Sawah Garapan ',
            'Total Luas Sawah Bagi Hasil  ',
            'Total Penerima Bantuan Kelompok Tani ',
        ];
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_pertanian', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function peternakan()
    {
        $title = 'Desa Apar - Peternakan';
        $kelompok = 'Rumah Data';
        $list = 'Peternakan';
        $data = [
            'Total Ternak Ayam ',
            'Total Ternak itik ',
            'Total Ternak Puyuh ',
            'Total Ternak Sapi ',
            'Total Ternak Kerbau ',
            'Total Ternak Kuda  ',
            'Total Ternak Kambing ',
            'Total Ternak Domba ',
            'Total Usaha Wallet',
            'Total Kucing Peliharaan',
            'Total Anjing Peliharaan',
            'Total Kucing yang sudah di vaksin Rabies',
            'Total Kucing yang belum di vaksin Rabies',
            'Total Anjing yang sudah di vaksin Rabies',
            'Total Anjing yang sudah di vaksin Rabies',
            'Total Kelompok Ternak ',
            'Total usaha kerupuk Kulit ',
            'Total Usaha Telur Asin',
            'Total Usaha Ayam Potong',
        ];
        $nilai = '50';
        $satuan = 'Ekor';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_peternakan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function perikanan()
    {
        $title = 'Desa Apar - Perikanan';
        $kelompok = 'Rumah Data';
        $list = 'Perikanan';
        $data = [
            'Total Pelaku usaha budidaya ikan ',
            'Total Kelompok usaha budidaya ikan ',
            'Total Pelaku usaha ikan Tangkap',
            'Total Kelompok usaha ikan Tangkap',
            'Total jenis budidaya ikan kolam air tenang ',
            'Total jenis budidaya ikan kolam air deras',
            'Total jenis budidaya ikan kolam terpal',
            'Total jenis budidaya ikan keramba',
            'Total jenis alat tangkap ikan pancing ulur ',
            'Total jenis alat tangkap ikan JARING INSANG',
            'Total jenis alat tangkap ikan PAYANG',
            'Total jenis alat tangkap ikan BAGAN',
            'Total jenis alat tangkap ikan Tonda',
            'Total Kapal Tangkap Kapal Motor',
            'Total Kapal Tangkap Motor temple',
            'Total Kapal Tangkap tanpa motor',
            'Total Produksi rata-rata perbulan ikan tangkap',
            'Total Produksi rata-rata triwulan budidaya ikan ',
        ];
        $nilai = '50';
        $satuan = 'Data';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.rumahdata.page_perikanan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'satuan' => $satuan,
            'nilai' => $nilai,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }

    public function detail_rumah_data()
    {
        $title = 'Desa Apar - Rumah Data';
        $kelompok = 'Rumah Data';
        $list = 'Perikanan';
        $data = [
            'Penggunaan Lahan',
            'Akses Jalan',
            'Bangunan',
            'Sarana Umum',
            'Wirausaha',
            'Rumah Tinggal Isi',
            'Rumah Tinggal Kosong',
            'SPPT PBB',
            'Kependudukan',
            'Umur',
            'Meninggal',
            'Kesehatan',
            'Pendidikan',
            'Beasiswa Pendidikan',
            'Bantuan Sosial',
            'Dasawisma PKK',
            'Posyandu',
            'Pertanian',
            'Peternakan',
            'Perikanan',
        ];

        $routekota = route('Kota.index');
        $name = 'Desa Apar';
        return view('frontend.desa.apar.rumahdata.detail_rumah_data', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'data' => $data,
            'routekota' => $routekota,
            'name' => $name,
        ]);
    }


    // Statistik Menu

    public function stk_lahan()
    {
        $title = 'Desa Apar - Statistik Penggunaan Lahan';
        $kelompok = 'Statistik';
        $list = 'Penggunaan Lahan';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_lahan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,
        ]);
    }
    public function stk_jalan()
    {
        $title = 'Desa Apar - Data Akses Jalan';
        $kelompok = 'Statistik';
        $list = 'Data Akses Jalan';

        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_jalan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_bangunan()
    {
        $title = 'Desa Apar - Data Bangunan';
        $kelompok = 'Statistik';
        $list = 'Data Bangunan';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_bangunan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_wirausaha()
    {
        $title = 'Desa Apar - Data Wirausaha';
        $kelompok = 'Statistik';
        $list = 'Data Wirausaha';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_wirausaha', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_kependudukan()
    {
        $title = 'Desa Apar - Kependudukan';
        $kelompok = 'Statistik';
        $list = 'Kependudukan';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_kependudukan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_umur()
    {
        $title = 'Desa Apar - Umur';
        $kelompok = 'Statistik';
        $list = 'Umur';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_umur', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_penduduk()
    {
        $title = 'Desa Apar - Data Penduduk';
        $kelompok = 'Statistik';
        $list = 'Data Penduduk';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_penduduk', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_pendidikan()
    {
        $title = 'Desa Apar - Data Penduduk';
        $kelompok = 'Statistik';
        $list = 'Data Penduduk';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_pendidikan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_bantuansosial()
    {
        $title = 'Desa Apar - Bantuan Sosial';
        $kelompok = 'Statistik';
        $list = 'Bantuan Sosial';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_bantuan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_pertanian()
    {
        $title = 'Desa Apar - Data Pertanian';
        $kelompok = 'Statistik';
        $list = 'Data Pertanian';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_pertanian', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_peternakan()
    {
        $title = 'Desa Apar - Data Peternakan';
        $kelompok = 'Statistik';
        $list = 'Data Peternakan';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_peternakan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
    public function stk_perikanan()
    {
        $title = 'Desa Apar - Data Perikanan';
        $kelompok = 'Statistik';
        $list = 'Data Perikanan';
        $name = 'Desa Apar';
        $route = route('desa.apar');
        $routekota = route('Kota.index');
        return view('frontend.desa.apar.statistik.page_perikanan', [
            'title' => $title,
            'kelompok' => $kelompok,
            'list' => $list,
            'name' => $name,
            'route' => $route,
            'routekota' => $routekota,

        ]);
    }
}
