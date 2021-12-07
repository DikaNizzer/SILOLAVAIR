<?php

namespace App\Http\Controllers;

use App\Models\TA;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){

        //ambil data dari table pengurus
        // $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = Mahasiswa::with('dosen')->get();

        // mengirim data ke view santri
        return view('paa/datamhs', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function mhs(){

        //ambil data dari table pengurus
        // $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = Mahasiswa::find('152011513060');

        // mengirim data ke view santri
        return view('mhs/index', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function ta(){

        //ambil data dari table pengurus
        // $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = Mahasiswa::find('152011513060')->with('ta')->first();
        $ta = DB::table('tugas_akhir')
                ->where('mahasiswa_NIM', '=', '152011513060')
                ->get();

        // mengirim data ke view santri
        return view('mhs/ta', [
            'mahasiswa' => $mahasiswa,
            'ta' => $ta
        ]);
    }
}
