<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Fire_Detection_Alarm_System extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_fire_detection_alarm_system';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_ups','pembersihan_lokasi_sekitar_mcfa','periksa_suhu_dan_kelembaban_ruangan_peralatan','visual_check_tampilan_layar_control_panel','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
