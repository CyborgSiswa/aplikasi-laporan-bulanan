<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Public_Address_System_Atau_Pas extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_public_address_system_atau_pas';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_kebersihan_ruangan_rak_amplifier','pemeriksaan_uji_coba_change_over_unit','pemeriksaan_suhu_dan_kelembaban_ruangan','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
