<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Jaringan_Fiber_Optic extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_jaringan_fiber_optic';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_atau_pembersihan_converter','pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}
