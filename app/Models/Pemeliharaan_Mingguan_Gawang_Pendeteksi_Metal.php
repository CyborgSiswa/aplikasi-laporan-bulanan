<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Gawang_Pendeteksi_Metal extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_gawang_pendeteksi_metal';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_alert_system_audible','pemeriksaan_alert_system_visible','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
