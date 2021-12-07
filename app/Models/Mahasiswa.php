<?php

namespace App\Models;

use App\Models\TA;
use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'NIM';
    protected $table = "mahasiswa";

    public function ta(){
        return $this->hasOne(TA::class, 'mahasiswa_NIM', 'primary_key');
    }

    public function dosen(){
        return $this->belongsTo('App\Models\Dosen');
    }

    public function jadwal(){
        return $this->hasOne(Jadwal::class, 'fk_mhs', 'primary_key');
    }
}
