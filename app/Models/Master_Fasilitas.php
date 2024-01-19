<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Fasilitas extends Model
{
    use HasFactory;
    protected $table='master_fasilitas';
    protected $fillable = [
        'nama_fasilitas','keterangan_fasilitas_master','created_by','updated_by','deleted_by'
    ];
}
