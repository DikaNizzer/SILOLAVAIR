<?php

namespace App\Models;

use App\Models\TA;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'NIM';
    protected $table = "mahasiswa";

    public function ta(){
        return $this->belongsTo(TA::class);
    }
}
