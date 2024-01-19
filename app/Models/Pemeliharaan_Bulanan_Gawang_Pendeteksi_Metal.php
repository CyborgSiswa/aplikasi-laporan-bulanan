<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Gawang_Pendeteksi_Metal extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_gawang_pendeteksi_metal';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_interferensi_mekanikal','pemeriksaan_interferensi_elektrikal','pemeriksaan_tingkat_sensitivitas','pengujian_kinerja_secara_berkala_dengan_menggunakan_otp','pemeriksaan_ups_automatic_change_over_facility','pemeriksaan_ups_expected_back_up_time','pemeriksaan_ups_fan','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
    
}
