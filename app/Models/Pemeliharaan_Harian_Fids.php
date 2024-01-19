<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Fids extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_fids';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_main_unit','pembersihan_ups','pembersihan_lokasi_sekitar_peralatan','periksa_suhu_dan_kelembaban_ruangan_peralatan_server_fids','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
