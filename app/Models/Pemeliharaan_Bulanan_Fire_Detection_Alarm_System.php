<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Fire_Detection_Alarm_System extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_fire_detection_alarm_system';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_jaringan','pengetesan_fungsi_dan_monitoring_pk','pengujian_kinerja_secara_berkala','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
