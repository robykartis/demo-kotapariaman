<?php

use App\Http\Controllers\Admin\AdminDesaAparController as AdminAdminDesaAparController;
use App\Http\Controllers\AdminKecamatanController;
use App\Http\Controllers\Public\DesaAparController;
use App\Http\Controllers\Public\KecSelatanController;
use App\Http\Controllers\Public\KecTengahController;
use App\Http\Controllers\Public\KecTimurController;
use App\Http\Controllers\Public\KecUtaraController;
use App\Http\Controllers\Public\KotaPariamanController;
use App\Http\Controllers\SatuDataController;
use App\Http\Controllers\SatuDataDesaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('sample');
// });
// Admin Desa Dashboard
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/desa/apar', [AdminAdminDesaAparController::class, 'apar'])->name('adm.apar');
});


Route::get('/', [KotaPariamanController::class, 'index'])->name('Kota.index');

// V2 APP-SATUDATA
// Route Kota
Route::group(['prefix' => 'kota/pariaman'], function () {
    Route::get('/', [SatuDataController::class, 'index'])->name('satudata.index');
    Route::get('/rumah/data', [SatuDataController::class, 'rumah_data'])->name('satudata.rumah_data');
    Route::get('/rumah/data/penggunaan/lahan', [SatuDataController::class, 'rd_lahan'])->name('satudata.rd_lahan');
    Route::get('/rumah/data/akses/jalan', [SatuDataController::class, 'rd_jalan'])->name('satudata.rd_jalan');
    Route::get('/rumah/data/bangunan', [SatuDataController::class, 'rd_bangunan'])->name('satudata.rd_bangunan');
    Route::get('/rumah/data/sarana/umum', [SatuDataController::class, 'rd_umum'])->name('satudata.rd_umum');
    Route::get('/rumah/data/wira/usaha', [SatuDataController::class, 'rd_usaha'])->name('satudata.rd_usaha');
    Route::get('/rumah/data/rumah/tinggal/isi', [SatuDataController::class, 'rd_rmhisi'])->name('satudata.rd_rmhisi');
    Route::get('/rumah/data/rumah/tinggal/kosong', [SatuDataController::class, 'rd_rmhkosong'])->name('satudata.rd_rmhkosong');
    Route::get('/rumah/data/rumah/spptpbb', [SatuDataController::class, 'rd_spptpbb'])->name('satudata.rd_spptpbb');
    Route::get('/rumah/data/rumah/kependudukan', [SatuDataController::class, 'rd_penduduk'])->name('satudata.rd_penduduk');
    Route::get('/rumah/data/rumah/umur', [SatuDataController::class, 'rd_umur'])->name('satudata.rd_umur');
    Route::get('/rumah/data/rumah/detail/umur', [SatuDataController::class, 'rd_detail_umur'])->name('satudata.rd_detail_umur');
    Route::get('/rumah/data/rumah/meninggal', [SatuDataController::class, 'rd_meninggal'])->name('satudata.rd_meninggal');
    Route::get('/rumah/data/rumah/kesehatan', [SatuDataController::class, 'rd_kesehatan'])->name('satudata.rd_kesehatan');
    Route::get('/rumah/data/rumah/pendidikan', [SatuDataController::class, 'rd_pendidikan'])->name('satudata.rd_pendidikan');
    Route::get('/rumah/data/rumah/beasiswa/pendidikan', [SatuDataController::class, 'rd_beasiswa'])->name('satudata.rd_beasiswa');
    Route::get('/rumah/data/rumah/bantuan/sosial', [SatuDataController::class, 'rd_bantuansos'])->name('satudata.rd_bantuansos');
    Route::get('/rumah/data/rumah/pkk', [SatuDataController::class, 'rd_pkk'])->name('satudata.rd_pkk');
    Route::get('/rumah/data/rumah/posyandu', [SatuDataController::class, 'rd_posyandu'])->name('satudata.rd_posyandu');
    Route::get('/rumah/data/rumah/pertanian', [SatuDataController::class, 'rd_pertanian'])->name('satudata.rd_pertanian');
    Route::get('/rumah/data/rumah/peternakan', [SatuDataController::class, 'rd_peternakan'])->name('satudata.rd_peternakan');
    Route::get('/rumah/data/rumah/perikanan', [SatuDataController::class, 'rd_perikanan'])->name('satudata.rd_perikanan');
    //    Statistik
    Route::get('/statistik', [SatuDataController::class, 'statistik'])->name('satudata.statistik');
    Route::get('/statistik/penggunaan/lahan', [SatuDataController::class, 'stk_lahan'])->name('satudata.stk_lahan');
    Route::get('/statistik/akses/jalan', [SatuDataController::class, 'stk_jalan'])->name('satudata.stk_jalan');
    Route::get('/statistik/bangunan', [SatuDataController::class, 'stk_bangunan'])->name('satudata.stk_bangunan');
    Route::get('/statistik/wirausaha', [SatuDataController::class, 'stk_usaha'])->name('satudata.stk_usaha');
    Route::get('/statistik/kependudukan', [SatuDataController::class, 'stk_penduduk'])->name('satudata.stk_penduduk');
    Route::get('/statistik/pendidikan', [SatuDataController::class, 'stk_pendidikan'])->name('satudata.stk_pendidikan');
    Route::get('/statistik/bantuan/sosial', [SatuDataController::class, 'stk_bantuan'])->name('satudata.stk_bantuan');
    Route::get('/statistik/pertanian', [SatuDataController::class, 'stk_pertanian'])->name('satudata.stk_pertanian');
    Route::get('/statistik/peternakan', [SatuDataController::class, 'stk_peternakan'])->name('satudata.stk_peternakan');
    Route::get('/statistik/perikanan', [SatuDataController::class, 'stk_perikanan'])->name('satudata.stk_perikanan');
});

// V2 APP-SATUDATA
// Route Per Desa
Route::group(['prefix' => 'desa/apar'], function () {
    Route::get('/', [SatuDataDesaController::class, 'index'])->name('desa.index');
    Route::get('/rumah/data', [SatuDataDesaController::class, 'rumah_data'])->name('desa.rumah_data');
    Route::get('/rumah/data/penggunaan/lahan', [SatuDataDesaController::class, 'rd_lahan'])->name('desa.rd_lahan');
    Route::get('/rumah/data/akses/jalan', [SatuDataDesaController::class, 'rd_jalan'])->name('desa.rd_jalan');
    Route::get('/rumah/data/bangunan', [SatuDataDesaController::class, 'rd_bangunan'])->name('desa.rd_bangunan');
    Route::get('/rumah/data/sarana/umum', [SatuDataDesaController::class, 'rd_umum'])->name('desa.rd_umum');
    Route::get('/rumah/data/wira/usaha', [SatuDataDesaController::class, 'rd_usaha'])->name('desa.rd_usaha');
    Route::get('/rumah/data/rumah/tinggal/isi', [SatuDataDesaController::class, 'rd_rmhisi'])->name('desa.rd_rmhisi');
    Route::get('/rumah/data/rumah/tinggal/kosong', [SatuDataDesaController::class, 'rd_rmhkosong'])->name('desa.rd_rmhkosong');
    Route::get('/rumah/data/rumah/spptpbb', [SatuDataDesaController::class, 'rd_spptpbb'])->name('desa.rd_spptpbb');
    Route::get('/rumah/data/rumah/kependudukan', [SatuDataDesaController::class, 'rd_penduduk'])->name('desa.rd_penduduk');
    Route::get('/rumah/data/rumah/umur', [SatuDataDesaController::class, 'rd_umur'])->name('desa.rd_umur');
    Route::get('/rumah/data/rumah/detail/umur', [SatuDataDesaController::class, 'rd_detail_umur'])->name('desa.rd_detail_umur');
    Route::get('/rumah/data/rumah/meninggal', [SatuDataDesaController::class, 'rd_meninggal'])->name('desa.rd_meninggal');
    Route::get('/rumah/data/rumah/kesehatan', [SatuDataDesaController::class, 'rd_kesehatan'])->name('desa.rd_kesehatan');
    Route::get('/rumah/data/rumah/pendidikan', [SatuDataDesaController::class, 'rd_pendidikan'])->name('desa.rd_pendidikan');
    Route::get('/rumah/data/rumah/beasiswa/pendidikan', [SatuDataDesaController::class, 'rd_beasiswa'])->name('desa.rd_beasiswa');
    Route::get('/rumah/data/rumah/bantuan/sosial', [SatuDataDesaController::class, 'rd_bantuansos'])->name('desa.rd_bantuansos');
    Route::get('/rumah/data/rumah/pkk', [SatuDataDesaController::class, 'rd_pkk'])->name('desa.rd_pkk');
    Route::get('/rumah/data/rumah/posyandu', [SatuDataDesaController::class, 'rd_posyandu'])->name('desa.rd_posyandu');
    Route::get('/rumah/data/rumah/pertanian', [SatuDataDesaController::class, 'rd_pertanian'])->name('desa.rd_pertanian');
    Route::get('/rumah/data/rumah/peternakan', [SatuDataDesaController::class, 'rd_peternakan'])->name('desa.rd_peternakan');
    Route::get('/rumah/data/rumah/perikanan', [SatuDataDesaController::class, 'rd_perikanan'])->name('desa.rd_perikanan');
    //    Statistik
    Route::get('/statistik', [SatuDataDesaController::class, 'statistik'])->name('desa.statistik');
    Route::get('/statistik/penggunaan/lahan', [SatuDataDesaController::class, 'stk_lahan'])->name('desa.stk_lahan');
    Route::get('/statistik/akses/jalan', [SatuDataDesaController::class, 'stk_jalan'])->name('desa.stk_jalan');
    Route::get('/statistik/bangunan', [SatuDataDesaController::class, 'stk_bangunan'])->name('desa.stk_bangunan');
    Route::get('/statistik/wirausaha', [SatuDataDesaController::class, 'stk_usaha'])->name('desa.stk_usaha');
    Route::get('/statistik/kependudukan', [SatuDataDesaController::class, 'stk_penduduk'])->name('desa.stk_penduduk');
    Route::get('/statistik/pendidikan', [SatuDataDesaController::class, 'stk_pendidikan'])->name('desa.stk_pendidikan');
    Route::get('/statistik/bantuan/sosial', [SatuDataDesaController::class, 'stk_bantuan'])->name('desa.stk_bantuan');
    Route::get('/statistik/pertanian', [SatuDataDesaController::class, 'stk_pertanian'])->name('desa.stk_pertanian');
    Route::get('/statistik/peternakan', [SatuDataDesaController::class, 'stk_peternakan'])->name('desa.stk_peternakan');
    Route::get('/statistik/perikanan', [SatuDataDesaController::class, 'stk_perikanan'])->name('desa.stk_perikanan');
});










// Route Kota
Route::group(['prefix' => 'kota/pariaman'], function () {
    Route::get('/', [KotaPariamanController::class, 'index'])->name('Kota.index');
    Route::get('/lahan', [KotaPariamanController::class, 'lahan'])->name('lahan.kota');
    Route::get('/jalan', [KotaPariamanController::class, 'jalan'])->name('jalan.kota');
    Route::get('/bangunan', [KotaPariamanController::class, 'bangunan'])->name('bangunan.kota');
    Route::get('/wirausaha', [KotaPariamanController::class, 'wirausaha'])->name('wirausaha.kota');
    Route::get('/sarana/umum', [KotaPariamanController::class, 'saranaumum'])->name('saranaumum.kota');
    Route::get('/rumah/tinggal/kosong', [KotaPariamanController::class, 'rmhkosong'])->name('rmhkosong.kota');
    Route::get('/rumah/tinggal/isi', [KotaPariamanController::class, 'rmhisi'])->name('rmhisi.kota');
    Route::get('/sptpbb', [KotaPariamanController::class, 'sptpbb'])->name('sptpbb.kota');
    Route::get('/data/penduduk', [KotaPariamanController::class, 'penduduk'])->name('penduduk.kota');
    Route::get('/kependudukan', [KotaPariamanController::class, 'kependudukan'])->name('kependudukan.kota');
    Route::get('/umur', [KotaPariamanController::class, 'umur'])->name('umur.kota');
    Route::get('/detail/umur', [KotaPariamanController::class, '_detail_umur'])->name('detailumur.kota');
    Route::get('/meninggal', [KotaPariamanController::class, 'meninggal'])->name('meninggal.kota');
    Route::get('/kesehatan', [KotaPariamanController::class, 'kesehatan'])->name('kesehatan.kota');
    Route::get('/pendidikan', [KotaPariamanController::class, 'pendidikan'])->name('pendidikan.kota');
    Route::get('/beasiswa/pendidikan', [KotaPariamanController::class, 'beasiswa'])->name('beasiswa.kota');
    Route::get('/bantuan/sosial', [KotaPariamanController::class, 'bantuansosial'])->name('bantuansosial.kota');
    Route::get('/pkk', [KotaPariamanController::class, 'pkk'])->name('pkk.kota');
    Route::get('/posyandu', [KotaPariamanController::class, 'posyandu'])->name('posyandu.kota');

    // Data Statistik Kota
    Route::get('/statistik/lahan', [KotaPariamanController::class, 'stklahan'])->name('stklahan.kota');
    Route::get('/statistik/jalan', [KotaPariamanController::class, 'stkjalan'])->name('stkjalan.kota');
    Route::get('/statistik/bangunan', [KotaPariamanController::class, 'stkbangunan'])->name('stkbangunan.kota');
    Route::get('/statistik/kependudukan', [KotaPariamanController::class, 'stkkependudukan'])->name('stkkependudukan.kota');
    Route::get('/statistik/pendidikan', [KotaPariamanController::class, 'stkpendidikan'])->name('stkpendidikan.kota');
    Route::get('/statistik/bantuan/sosial', [KotaPariamanController::class, 'stkbantuansosial'])->name('stkbantuansosial.kota');
});

// Publick Kecamatan
Route::group(['prefix' => 'kecamatan'], function () {
    // kec pariaman utara
    Route::get('/pariaman/utara', [KecUtaraController::class, 'index'])->name('kec.utara');

    // Daftar Desa Kec Pariman Utara
    Route::get('/pariaman/utara/desa', [KecUtaraController::class, 'desa'])->name('desa.utara');

    // Profil Kec Pariaman Uatara
    Route::get('/pariaman/utara/biografi', [KecUtaraController::class, 'biografi'])->name('bio.utara');
    Route::get('/pariaman/utara/struktur-kecamatan', [KecUtaraController::class, 'struktur_pemerintahan'])->name('struk.utara');
    Route::get('/pariaman/utara/struktur-pkk', [KecUtaraController::class, 'struktur_pkk'])->name('pkk.utara');
    Route::get('/pariaman/utara/karang-taruna', [KecUtaraController::class, 'struktur_taruna'])->name('taruna.utara');

    // Rumah Data Kec Pariaman Utara
    Route::get('/pariaman/utara/rumah/data/penggunaan/lahan', [KecUtaraController::class, 'lahan'])->name('lahan.utara');
    Route::get('/pariaman/utara/rumah/data/akses-jalan', [KecUtaraController::class, 'jalan'])->name('jalan.utara');
    Route::get('/pariaman/utara/rumah/data/bangunan', [KecUtaraController::class, 'bangunan'])->name('bangunan.utara');
    Route::get('/pariaman/utara/rumah/data/sarana/umum', [KecUtaraController::class, 'saranaumum'])->name('saranaumum.utara');
    Route::get('/pariaman/utara/rumah/data/wirausaha', [KecUtaraController::class, 'wirausaha'])->name('wirausaha.utara');
    Route::get('/pariaman/utara/rumah/data/rumah/tinggal/kosong', [KecUtaraController::class, 'rmhkosong'])->name('rmhkosong.utara');
    Route::get('/pariaman/utara/rumah/data/rumah/tinggal/isi', [KecUtaraController::class, 'rmhisi'])->name('rmhisi.utara');
    Route::get('/pariaman/utara/rumah/data/sptpbb', [KecUtaraController::class, 'sptpbb'])->name('sptpbb.utara');
    Route::get('/pariaman/utara/rumah/data/penduduk', [KecUtaraController::class, 'penduduk'])->name('penduduk.utara');
    Route::get('/pariaman/utara/rumah/data/kependudukan', [KecUtaraController::class, 'kependudukan'])->name('kependudukan.utara');
    Route::get('/pariaman/utara/rumah/data/umur', [KecUtaraController::class, 'umur'])->name('umur.utara');
    Route::get('/pariaman/utara/rumah/data/meninggal', [KecUtaraController::class, 'meninggal'])->name('meninggal.utara');
    Route::get('/pariaman/utara/rumah/data/kesehatan', [KecUtaraController::class, 'kesehatan'])->name('kesehatan.utara');
    Route::get('/pariaman/utara/rumah/data/pendidikan', [KecUtaraController::class, 'pendidikan'])->name('pendidikan.utara');
    Route::get('/pariaman/utara/rumah/data/beasiswa/pendidikan', [KecUtaraController::class, 'beapendidikan'])->name('beapendidikan.utara');
    Route::get('/pariaman/utara/rumah/data/bantuan/sosial', [KecUtaraController::class, 'bantuansosial'])->name('bantuansosial.utara');
    Route::get('/pariaman/utara/rumah/data/pkk', [KecUtaraController::class, 'pkk'])->name('pkk.utara');
    Route::get('/pariaman/utara/rumah/data/posyandu', [KecUtaraController::class, 'posyandu'])->name('posyandu.utara');

    // Statistik Kec Pariaman Utara
    Route::get('/pariaman/utara/statistik/penggunaan/lahan', [KecUtaraController::class, 'stklahan'])->name('stklahan.utara');
    Route::get('/pariaman/utara/statistik/akses/jalan', [KecUtaraController::class, 'stkjalan'])->name('stkjalan.utara');
    Route::get('/pariaman/utara/statistik/bangunan', [KecUtaraController::class, 'stkbangunan'])->name('stkbangunan.utara');
    Route::get('/pariaman/utara/statistik/wirausaha', [KecUtaraController::class, 'stkwirausaha'])->name('stkwirausaha.utara');
    Route::get('/pariaman/utara/statistik/kependudukan', [KecUtaraController::class, 'stkkependudukan'])->name('stkkependudukan.utara');
    Route::get('/pariaman/utara/statistik/pendidikan', [KecUtaraController::class, 'stkpendidikan'])->name('stkpendidikan.utara');
    Route::get('/pariaman/utara/statistik/bantuan/sosial', [KecUtaraController::class, 'stkbantuansosial'])->name('stkbantuansosial.utara');
});

// Public Desa Apar
Route::group(['prefix' => 'desa'], function () {
    // Desa Apar
    // Menu Rumah Data
    Route::get('/apar', [DesaAparController::class, 'index'])->name('desa.apar');
    Route::get('/apar/rumah/data/lahan', [DesaAparController::class, 'lahan'])->name('apar.lahan');
    Route::get('/apar/rumah/data/akses/jalan', [DesaAparController::class, 'jalan'])->name('apar.jalan');
    Route::get('/apar/rumah/data/bangunan', [DesaAparController::class, 'bangunan'])->name('apar.bangunan');
    Route::get('/apar/rumah/data/spptpbb', [DesaAparController::class, 'sptpbb'])->name('apar.sptpbb');
    Route::get('/apar/rumah/data/kependudukan', [DesaAparController::class, 'kependudukan'])->name('apar.kependudukan');
    Route::get('/apar/rumah/data/umur', [DesaAparController::class, 'umur'])->name('apar.umur');
    Route::get('/apar/rumah/data/datapenduduk', [DesaAparController::class, 'datapenduduk'])->name('apar.datapenduduk');
    Route::get('/apar/rumah/data/meninggal', [DesaAparController::class, 'meninggal'])->name('apar.meninggal');
    Route::get('/apar/rumah/data/kesehatan', [DesaAparController::class, 'kesehatan'])->name('apar.kesehatan');
    Route::get('/apar/rumah/data/pendidikan', [DesaAparController::class, 'pendidikan'])->name('apar.pendidikan');
    Route::get('/apar/rumah/data/beasiswa/pendidikan', [DesaAparController::class, 'beapendidikan'])->name('apar.beapendidikan');
    Route::get('/apar/rumah/data/bantuansosial', [DesaAparController::class, 'bantuansosial'])->name('apar.bantuansosial');
    Route::get('/apar/rumah/data/rumah/tinggal/isi', [DesaAparController::class, 'rumahisi'])->name('apar.rumahisi');
    Route::get('/apar/rumah/data/sarana/umum', [DesaAparController::class, 'saranaumum'])->name('apar.saranaumum');
    Route::get('/apar/rumah/data/wirausaha', [DesaAparController::class, 'wirausaha'])->name('apar.wirausaha');
    Route::get('/apar/rumah/data/rumahkosong', [DesaAparController::class, 'rumahkosong'])->name('apar.rumahkosong');
    Route::get('/apar/rumah/data/dasawisma/pkk', [DesaAparController::class, 'pkk'])->name('apar.pkk');
    Route::get('/apar/rumah/data/posyandu', [DesaAparController::class, 'posyandu'])->name('apar.posyandu');
    Route::get('/apar/rumah/data/pertanian', [DesaAparController::class, 'pertanian'])->name('apar.pertanian');
    Route::get('/apar/rumah/data/peternakan', [DesaAparController::class, 'peternakan'])->name('apar.peternakan');
    Route::get('/apar/rumah/data/perikanan', [DesaAparController::class, 'perikanan'])->name('apar.perikanan');
    Route::get('/apar/rumah/data', [DesaAparController::class, 'detail_rumah_data'])->name('apar.rumahdata_detail');

    // Menu Statistik
    Route::get('/apar/statistik/lahan', [DesaAparController::class, 'stk_lahan'])->name('apar.stk_lahan');
    Route::get('/apar/statistik/akses/jalan', [DesaAparController::class, 'stk_jalan'])->name('apar.stk_jalan');
    Route::get('/apar/statistik/bangunan', [DesaAparController::class, 'stk_bangunan'])->name('apar.stk_bangunan');
    Route::get('/apar/statistik/wirausaha', [DesaAparController::class, 'stk_wirausaha'])->name('apar.stk_wirausaha');
    Route::get('/apar/statistik/kependudukan', [DesaAparController::class, 'stk_kependudukan'])->name('apar.stk_kependudukan');
    Route::get('/apar/statistik/umur', [DesaAparController::class, 'stk_umur'])->name('apar.stk_umur');
    Route::get('/apar/statistik/data/penduduk', [DesaAparController::class, 'stk_penduduk'])->name('apar.stk_penduduk');
    Route::get('/apar/statistik/pendidikan', [DesaAparController::class, 'stk_pendidikan'])->name('apar.stk_pendidikan');
    Route::get('/apar/statistik/bantuan/sosial', [DesaAparController::class, 'stk_bantuansosial'])->name('apar.stk_bantuansosial');
    Route::get('/apar/statistik/pertanian', [DesaAparController::class, 'stk_pertanian'])->name('apar.stk_pertanian');
    Route::get('/apar/statistik/peternakan', [DesaAparController::class, 'stk_peternakan'])->name('apar.stk_peternakan');
    Route::get('/apar/statistik/perikanan', [DesaAparController::class, 'stk_perikanan'])->name('apar.stk_perikanan');
});

// Admin Kecamtan Dashboard
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/kecamatan-pariaman-utara', [AdminKecamatanController::class, 'utara'])->name('adkec.utara');
    Route::get('/kecamatan-pariaman-selatan', [AdminKecamatanController::class, 'selatan'])->name('adkec.selatan');
    Route::get('/kecamatan-pariaman-timur', [AdminKecamatanController::class, 'timur'])->name('adkec.timur');
    Route::get('/kecamatan-pariaman-tengah', [AdminKecamatanController::class, 'tengah'])->name('adkec.tengah');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
