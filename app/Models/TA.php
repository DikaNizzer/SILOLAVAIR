<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TA extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_TA';
    protected $table = "tugas_akhir";
    protected $foreignKey = 'mahasiswa_NIM';

    public function mahasiswa(){
        return $this->belongsTo('App\Models\Mahasiswa');
    }

    public function bimbingan(){
    	return $this->hasMany('App\Models\Bimbingan');
    }
}
