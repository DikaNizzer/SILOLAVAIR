<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_BIMBINGAN';
    protected $table = "bimbingan";
    protected $foreignKey = 'tugas_akhir_ID_TA';

    public function ta(){
    	return $this->belongsTo('App\Models\TA');
    }
}
