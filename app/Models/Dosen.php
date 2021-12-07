<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
class Dosen extends Model
{
    use HasFactory;
    protected $primaryKey = 'NIP';
    protected $table = "dosen";

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'fk_dosen', 'primary_key');
    }
}
