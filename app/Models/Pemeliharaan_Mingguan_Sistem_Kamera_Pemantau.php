<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Sistem_Kamera_Pemantau extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_sistem_kamera_pemantau';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_fungsi_auto_recording','pemeriksaan_fungsi_manual_recording','pemeriksaan_fungsi_pengendali_pan_tilt_zoom','pemeriksaan_fungsi_pengendali_multiscreen_display','pemeriksaan_fungsi_pengendali_monitor_selector_area','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
