<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Fire_Detection_Alarm_System extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_fire_detection_alarm_system';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_main_supply_voltage','pemeriksaan_output_voltage_ups','pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
