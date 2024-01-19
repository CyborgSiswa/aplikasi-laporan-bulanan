<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_Harian extends Model
{
    use HasFactory;
    protected $table='log_harian';
    protected $fillable = [
        'id_petugas','id_log_harian','tanggal','created_by','updated_by','deleted_by'
    ];
    public function Petugas(){
        return $this->hasOne(Petugas::class,'id','id_petugas');
    }
}
