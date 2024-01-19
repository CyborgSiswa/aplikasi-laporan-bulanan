<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Access_Control extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_access_control';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_main_unit','pembersihan_ups','pemeriksaan_main_supply_voltage','pemeriksaan_output_voltage_ups','pembersihan_kabel_kabel_dan_konektor_yang_terlihat','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
