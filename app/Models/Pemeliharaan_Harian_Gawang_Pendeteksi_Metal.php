<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Gawang_Pendeteksi_Metal extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_gawang_pendeteksi_metal';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_main_unit','pembersihan_ups','lokasi_sekitar_penempatan_peralatan','periksa_main_supply_voltage','periksa_output_voltage_ups','pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
