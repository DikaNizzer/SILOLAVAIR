<?php

namespace App\Http\Controllers;

use App\Models\TA;
use App\Models\Bimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaController extends Controller
{
    public function index(){

        // $coba= TA::all()->mahasiswa;
        // dd($coba['NAMA_MHS']);
        //ambil data dari table pengurus
        // $ta = DB::table('tugas_akhir')->get();
        $ta = TA::with('mahasiswa')->get();
        // $bimbingan = Bimbingan::withCount('ta')->get();
        // mengirim data ke view santri
        return view('paa/bimbingan', [
            'ta' => $ta
            // 'bimbingan' => $bimbingan
            // 'mahasiswa' => $mahasiswa
        ]);
    }
}
