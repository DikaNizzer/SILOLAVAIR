<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalCOntroller extends Controller
{
    public function index(){

        $jadwal = Jadwal::with('mahasiswa')->get();

        $mhs = DB::table('mahasiswa')->get();
        $dosen = DB::table('dosen')->get();
        // mengirim data ke view jadwal
        return view('paa/jadwal', [
            'jadwal' => $jadwal,
            'mhs' => $mhs,
            'dosen' => $dosen
            // 'mahasiswa' => $mahasiswa
        ]);
    }

    public function buat(Request $request){

        $validatedData = $request->validate([
            'ID_SIDANG' => 'required|unique:jadwalsidang',
            'mahasiswa_NIM' =>['required', 'max:12'],
            'WAKTU_SIDANG' => 'required',
            'STATUS_SIDANG' => ['required', 'max:1'],
            'DOSEN_PENGUJI' => ['required', 'max:30'],
        ]);


        $jadwal = Jadwal::create($validatedData);
        $request->session()->flash('success', 'Pembuatan Jadwal Berhasil');
        return redirect('/jadwalpaa');
    }
}
