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

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}
