<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Pendeteksi_Metal_Genggam extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_pendeteksi_metal_genggam';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_fungsi_switch_atau_tombol_on_off','pemeriksaan_alert_system_audible','pemeriksaan_alert_system_visible','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
