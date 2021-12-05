<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
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


//Jadwal SIdang
Route::get('/jadwalpaa', function () {
    return view('paa.jadwal');
});



//HALAMAN DOSEN SETELAH LOGIN
//login dosen
Route::get('/dospem', function () {
    return view('dosen.index');
});

Route::get('/mhsbim', function () {
    return view('dosen.datamhs');
});

Route::get('/tamhs', function () {
    return view('dosen.ta');
});

Route::get('/riwayatbim', function () {
    return view('dosen.riwayatbimbingan');
});

Route::get('/jadwaldosen', function () {
    return view('dosen.jadwal');
});


//HALAMAN mhs setelah login
Route::get('/mahasiswa', function () {
    return view('mhs.index');
});

Route::get('/tugasakhir', function () {
    return view('mhs.ta');
});
