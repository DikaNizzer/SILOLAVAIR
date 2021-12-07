<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'ID_SIDANG';
    protected $table = "jadwalsidang";
    protected $foreignKey = 'mahasiswa_NIM';
    protected $guarded = [];

    public function mahasiswa(){
        return $this->belongsTo('App\Models\Mahasiswa');
    }
}
