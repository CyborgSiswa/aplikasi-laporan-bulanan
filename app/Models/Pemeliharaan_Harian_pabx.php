<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_pabx extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_pabx';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_ruangan_sentral_operator','periksa_suhu_dan_kelembaban_ruangan_peralatan_server_pabx','periksa_uji_coba_change_over_unit','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
