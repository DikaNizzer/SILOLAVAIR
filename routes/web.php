<?php

use Illuminate\Support\Facades\Route;

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

//Login Mahasiswa
Route::get('/mhs', function () {
    return view('mhs.index');
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
Route::get('/datamhs', function () {
    return view('paa.datamhs');
});

//tabel Dosen
Route::get('/datadosen', function () {
    return view('paa.datadosen');
});

//tabel Dosen
Route::get('/bimbingan', function () {
    return view('paa.bimbingan');
});
