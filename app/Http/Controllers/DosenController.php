<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){

        //ambil data dari table pengurus
        $dosen = DB::table('dosen')->get();

        // mengirim data ke view santri
        return view('paa/datadosen', [
            'dosen' => $dosen
        ]);
    }
}
