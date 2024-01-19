<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Pendeteksi_Metal_Genggam extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_pendeteksi_metal_genggam';
    protected $fillable = [
        'id_peralatan','tanggal','pengujian_sensitivitas','pengujian_kinerja_secara_berkala_dengan_otp','pemeriksaan_peralatan_dari_kerusakan_fisik','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
