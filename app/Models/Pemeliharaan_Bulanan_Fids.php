<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Fids extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_fids';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_jaringan','pengujian_kinerja_secara_berkala','pemeriksaan_access_switch_dan_distribution_switch','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
