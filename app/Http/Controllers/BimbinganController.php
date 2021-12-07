<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function index(){

        //ambil data dari table pengurus
        // $mahasiswa = DB::table('mahasiswa')->get();
        $bim = Bimbingan::with('ta')->first();
        // $ta = DB::table('tugas_akhir')
        //         ->where('mahasiswa_NIM', '=', '152011513060')
        //         ->get();

        // mengirim data ke view santri
        return view('mhs/bimbingan', [
            'bim' => $bim
            // 'ta' => $ta
        ]);
    }
}
