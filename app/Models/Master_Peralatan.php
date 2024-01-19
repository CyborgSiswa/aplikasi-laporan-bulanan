<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Peralatan extends Model
{
    use HasFactory;
    protected $table='master_peralatan';
    protected $fillable = [
        'id_peralatan','nama_peralatan','lokasi', 'merk', 'data_teknik', 'tahun_produksi','buatan','keterangan','total_jam_terputus','id_fasilitas','foto','created_by','updated_by','deleted_by'
    ];

    public function MasterFasilitas(){
        return $this->hasOne(Master_Fasilitas::class,'id','id_fasilitas');
    }
}
