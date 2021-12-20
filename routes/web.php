<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalCOntroller;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

//HALAMAN PAA SETELAH LOGIN
//login paa
Route::get('/paa', function () {
    return view('paa.index');
});

//Buat Akun Dosen
Route::get('/buatdosen', function () {
    return view('paa.buatdosen');
});

//Buat Akun Mahasiswa
Route::get('/buatmhs', function () {
    return view('paa.buatmhs');
});

//tabel Mahasiswa
// Route::get('/datamhs', function () {
//     return view('paa.datamhs');
// });
Route::get('/datamhs', [MahasiswaController::class, 'index'] );

//tabel Dosen
// Route::get('/datadosen', function () {
//     return view('paa.datadosen');
// });
Route::get('/datadosen', [DosenController::class, 'index'] );

//tabel Dosen
Route::get('/bimbingan', function () {
    return view('paa.bimbingan');
});
Route::get('/bimbingan', [TaController::class, 'index'] );

Route::get('/pengajuanmhs', function () {
    return view('paa.pengajuan');
});

//Jadwal SIdang
// Route::get('/jadwalpaa', function () {
//     return view('paa.jadwal');
// });
Route::get('/jadwalpaa', [JadwalCOntroller::class, 'index'] );

//Membuat jadwal
Route::post('/buatjadwal', [JadwalCOntroller::class, 'buat'] );


//HALAMAN DOSEN SETELAH LOGIN
//login dosen
Route::get('/dospem', function () {
    return view('dosen.index');
});

Route::get('/mhsbim', function () {
    return view('dosen.datamhs');
});

Route::get('/tadosen', function () {
    return view('dosen.ta');
});

Route::get('/riwayatbim', function () {
    return view('dosen.riwayatbimbingan');
});

Route::get('/jadwaldosen', function () {
    return view('dosen.jadwal');
});

Route::get('/pengajuan', function () {
    return view('dosen.pengajuan');
});

//HALAMAN mhs setelah login
// Route::get('/mahasiswa', function () {
//     return view('mhs.index');
// });
Route::get('/mahasiswa', [MahasiswaController::class, 'mhs'] );

//halaman ta mhs
// Route::get('/tugasakhir', function () {
//     return view('mhs.ta');
// });

Route::get('/tugasakhir', [MahasiswaController::class, 'ta'] );

// Route::get('/tamhs', function () {
//     return view('mhs.ta');
// });

Route::get('/tamhs', [BimbinganController::class, 'index'] );

//Halaman Pengajuan
Route::get('/ajukan', function () {
    return view('mhs.ajukan');
});
