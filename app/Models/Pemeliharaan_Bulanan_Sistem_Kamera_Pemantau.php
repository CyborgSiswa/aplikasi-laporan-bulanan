<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Sistem_Kamera_Pemantau extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_sistem_kamera_pemantau';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_jaringan','pemeriksaan_monitor_contrast_brightness_sharpness','pengujian_kinerja_secara_berkala','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
