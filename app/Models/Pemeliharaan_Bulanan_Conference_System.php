<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Conference_System extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_conference_system';
    protected $fillable = [
        'id_peralatan','tanggal','bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit','bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
