<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){

        //ambil data dari table pengurus
        $mahasiswa = DB::table('mahasiswa')->get();

        // mengirim data ke view santri
        return view('paa/datamhs', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}
