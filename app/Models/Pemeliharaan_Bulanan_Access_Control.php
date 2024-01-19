<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Access_Control extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_access_control';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric','pemeriksaan_fungsi_emergency_exit','pengujian_kinerja_secara_berkala','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
