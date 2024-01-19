<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Sistem_Kamera_Pemantau extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_sistem_kamera_pemantau';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_camera_control_system','pembersihan_monitor','pembersihan_ups','pembersihan_ruangan_pusat_pengendali_control_center','pemeriksaan_main_supply_voltage','pemeriksaan_output_voltage_ups','pembersihan_output_voltage_ups','pembersihan_kabel_kabel_dan_konektor_yang_terlihat','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
